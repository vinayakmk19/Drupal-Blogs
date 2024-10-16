<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/blog_list/templates/blog-list-page.html.twig */
class __TwigTemplate_025516c5bc803549dd0ec598ede0de1b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("blog_list/datatables"), "html", null, true);
        echo "

";
        // line 5
        echo "<table class=\"table\" id=\"b-table\">
      ";
        // line 7
        echo "  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Created Date</th>
      <th>Active</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nodes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 19
            echo "      <tr>
        <td><a href=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("blog_list.detail", ["node_id" => twig_get_attribute($this->env, $this->source, $context["node"], "id", [], "any", false, false, true, 20)]), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</a></td>
        <td>";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "description", [], "any", false, false, true, 21), 21, $this->source)), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "created_date", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["node"], "active", [], "any", false, false, true, 23)) ? ("True") : ("False")));
            echo "</td>
        <td><a href=\"/node/";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["node"], "id", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "/edit\" class=\"button\">Edit</a></td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/blog_list/templates/blog-list-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  67 => 20,  64 => 19,  59 => 18,  47 => 7,  44 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/blog_list/templates/blog-list-page.html.twig", "/var/www/html/web/modules/custom/blog_list/templates/blog-list-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 18);
        static $filters = array("escape" => 2, "striptags" => 21);
        static $functions = array("attach_library" => 2, "path" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'striptags'],
                ['attach_library', 'path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
