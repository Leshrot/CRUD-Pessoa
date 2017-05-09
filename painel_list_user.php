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
include("usermodal/update_user.php");
include("usermodal/delete_user.php");

include("view/navbar.php"); 
include("view/menu.php"); 
include("view/content.php");


?>
    <div class="modal fade" id="update_user" style="margin-top:50px;" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
        </div>
      </div>
    </div>
  

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/bootstrap.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>


      <!-- AJAX UPDATE --> 
    <script type="text/javascript">
    $('.modalLink').click(function(){
        var cd_pessoa= $(this).attr('data-id');
        $.ajax({
          url:"usermodal/update_user.php?cd_pessoa=" + cd_pessoa,
          cache:false,
          success: function(result){
            $("#update_user").html(result);
            $("#update_user").modal("show");
          }});
    });
    </script>

    <!-- JAVASCRIPT DELETE--> 
    <script type="text/javascript">
        function confirm_modal(delete_url)
        {
          $('#delete_user').modal('show', {backdrop: 'static'});
          document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>
  
</body>
</html>
