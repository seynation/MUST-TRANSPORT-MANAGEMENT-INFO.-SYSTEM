<?php
  session_start();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MUST-TRANSPORT INFORMATION MANAGEMENT SYSTEM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/owl.carousel.css">
    <link rel="stylesheet" href="views/css/owl.theme.css">
    <link rel="stylesheet" href="views/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/morrisviews/js/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="views/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="views/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="views/style.css">
     <link rel="stylesheet" href="views/css/modals.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="views/css/responsive.css">
    <link rel="stylesheet" href="views/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="views/css/data-table/bootstrap-editable.css">
    <!-- modernizr JS
		============================================ -->
    <script src="views/js/vendor/modernizr-2.8.3.min.js"></script>
     <script src="views/js/sweetalert/sweetalert2@9.js"></script>
</head>

<body>
   
    <?php
    
    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "ok"){
      // echo '<div class="dashboard-main-wrapper">';
     include "views/modules/sidemenu.php";
     include "views/modules/navbar.php";

$item = null;
$value = null;
$departs = usersmanagectrl::deprtusersmanagectrlshow($item,$value); 
                                        
foreach ($departs as $key => $value) {
  $fullname  = $value["othername"];
  $iem = "id";
  $alue = $value["departid"];
  $dprts = departctrl::departctrlshow($iem,$alue); 

  $_SESSION["name"] = $dprts["name"];
}

    
      if(isset($_GET["route"])){
        if ($_GET["route"] == "home" ||
            $_GET["route"] == "manageusers" ||
            $_GET["route"] == "departments" ||
            $_GET["route"] == "login" ||
            $_GET["route"] == "logout" ||
            $_GET["route"] == "password" ||
            $_GET["route"] == "requesttransport" ||
            $_GET["route"] == "requestsmade" ||
            $_GET["route"] == "requestreply" ||
            $_GET["route"] == "myrequests" ||
            $_GET["route"] == "managevehicles" ||
            $_GET["route"] == "assignvehicles" ||
            $_GET["route"] == "sessionprint" ||
            $_GET["route"] == "users") {
             include "views/modules/".$_GET["route"].".php";
         }
        else{
           include "views/modules/404.php";
        }
      }else{
        include "views/modules/home.php";
     }
      // include "views/modules/footer.php";
      echo '</div>';
      ////login page
    }else{
      include "views/modules/login.php";
    }
    ?>

        
                    
       
        
    <!-- jquery
		============================================ -->
    <script src="views/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="views/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="views/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="views/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="views/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="views/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="views/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="views/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="views/js/counterup/jquery.counterup.min.js"></script>
    <script src="views/js/counterup/waypoints.min.js"></script>
    <script src="views/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="views/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="views/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="views/js/metisMenu/metisMenu.min.js"></script>
    <script src="views/js/metisMenu/metisMenu-active.js"></script>
   
    <script src="views/js/data-table/bootstrap-table.js"></script>
    <script src="views/js/data-table/tableExport.js"></script>
    <script src="views/js/data-table/data-table-active.js"></script>
    <script src="views/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="views/js/data-table/colResizable-1.5.source.js"></script>
    <script src="views/js/data-table/bootstrap-table-export.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="views/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="views/js/main.js"></script>

    <script src="views/javascript/depart.js"></script>
    <script src="views/javascript/users.js"></script>
    <script src="views/javascript/vehicles.js"></script>
    

</body>

</html>