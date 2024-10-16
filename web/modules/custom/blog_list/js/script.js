jQuery(document).ready(function() {
    jQuery('#b-table').DataTable({
      paging: true,       
      searching: true,     
      ordering: true,      
      responsive: true,     
      columns: [
        { title: "Title" },
        { title: "Description" },
        { title: "Created Date" },
        { title: "Active" },
        { title: "Edit" }
      ]
    });
  });