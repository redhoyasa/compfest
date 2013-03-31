<!DOCTYPE html>
<html>
  <head>
    <title>Compfest</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>bootstrap/css/dashboard.css" rel="stylesheet" media="screen">
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script>
    $("document").ready(function() {
      /*
      $(".motivation").hide();
      $('.seminar :checkbox').change(function() {

        // $this will contain a reference to the checkbox  
        if ($(this).attr('checked') == "checked") {
            $(this).parent().find(".motivation").show();
        } else {
            $(this).parent().find(".motivation").hide();
        }
      });
      */
    });
    </script>
  </head>
  <body>
    <?php echo $content; ?>
  </body>
</html>

