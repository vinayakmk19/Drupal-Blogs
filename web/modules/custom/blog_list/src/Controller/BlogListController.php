<?php

namespace Drupal\blog_list\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogListController extends ControllerBase
{
    /**
     * Function to display a list of blog posts.
     * This method loads all nodes of type 'blogs' and passes the data to a Twig template.
     */
    public function blogPage()
    {
        $nodes = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'blogs']);

        // Prepare the data to be passed to the Twig template

        $data = [];
        foreach ($nodes as $node) {
            $data[] = [
                'id' => $node->id(),
                'title' => $node->getTitle(),
                'description' => $node->get('field_description')->value,
                'created_date' => $node->get('field_created_date')->value,
                'active' => $node->get('field_active')->value,
            ];
        }

        // Return the data to the Twig template 'blog_list_page' for rendering
        return [
            '#theme' => 'blog_list_page',
            '#nodes' => $data,
            '#attached' => [
                'library' => [
                    'blog_list/datatables',
                ],
            ],
        ];
    }

    /**
     * Function to display the details of a specific blog post.
     * This method loads a blog post by its node ID and passes the details to a Twig template.
     */
    public function blogDetail($node_id)
    {
        // Load the blog node by ID
        $node = \Drupal::entityTypeManager()->getStorage('node')->load($node_id);

        // Check if the node exists and is of type 'blogs'
        if ($node && $node->getType() === 'blogs') {
            // Prepared the data for a single blog post

            $data = [
                'id' => $node->id(),
                'title' => $node->getTitle(),
                'description' => $node->get('field_description')->value,
                'created_date' => $node->get('field_created_date')->value,
                'active' => $node->get('field_active')->value,
            ];

            return [
                '#theme' => 'blog_detail_page',
                '#data' => $data,
            ];
        } else {
            throw new NotFoundHttpException();
        }
    }
}
