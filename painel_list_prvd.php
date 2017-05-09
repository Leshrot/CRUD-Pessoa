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
  
  <style>
      .wrap {
      width: 47.3%;
      margin-bottom: 15px;
    }

    .custom-select {
      border: 1px solid #CCC;
      border-radius: 6px;
      -moz-appearance: none;
      -webkit-appearance: none;
      cursor: pointer;
      display: inline-block;
      margin: 0 auto;
      padding: 10px;
      width: 100%;
      height: 48px;
      font-size: 18px;

      line-height: 1.3333333;

    }

    @media screen and (-webkit-min-device-pixel-ratio: 0) {
      .custom-select {
        background: #FFFFFF url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/392/select-arrow.png) 95% 50% no-repeat;
      }
    }
  </style>
</head>


<body>
<?php 
include("modalincludes.php");

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
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src="js/bootstrap.min.js"></script>

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
