<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Painel de administrador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <!-- LIBRARY CSS -->
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>

  <!-- OWN CSS -->
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/menu.css">
  
</head>


<body>
<?php

include("modalincludes.php");
include("prodmodal/update_prod.php");
include("prodmodal/delete_prod.php");

include("view/navbar.php"); 
include("view/menu.php"); 
include("view/content.php");

?>
    <div class="modal fade" id="update_prod" style="margin-top:50px;" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
        </div>
      </div>
    </div>

    <div class="modal fade" id="view_prod" style="margin-top:50px;" role="dialog">
        <?php include("prodmodal/view_prod.php"); ?>
    </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/bootstrap.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>


      <!-- AJAX UPDATE --> 
    <script type="text/javascript">
    $('.modalLink').click(function(){
        var cd_produto= $(this).attr('data-id');
        $.ajax({
          url:"prodmodal/update_prod.php?cd_produto=" + cd_produto,
          cache:false,
          success: function(result){
            $("#update_prod").html(result);
            $("#update_prod").modal("show");
          }});
    });
    </script>

    <!-- AJAX VIEW --> 
    <script type="text/javascript">
    $('.modalView').click(function(){
        var cd_produto= $(this).attr('data-id');
        $.ajax({
          url:"prodmodal/view_prod.php?cd_produto=" + cd_produto,
          cache:false,
          success: function(result){
            $("#view_prod").html(result);
            $("#view_prod").modal("show");
          }});
    });
    </script>

    <!-- JAVASCRIPT DELETE--> 
    <script type="text/javascript">
        function confirm_modal(delete_url)
        {
          $('#delete_prod').modal('show', {backdrop: 'static'});
          document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>
  
</body>
</html>
