<?php
    require_once './views/includs/header.php';
    require_once 'autoload.php';
    require_once('controllers/HomeController.php');

    $home = new HomeController();
    $pages=['admin','dashboard','index','client','payment','voyage','reservation','login','signup','addvoyage','updatevoyage','updateuser','deletevoyage','deleteuser','addreserve','updatereserv','deletereserv','logoutadmin','logoutuser'];

    if (isset($_GET['page'])) {
        if (in_array($_GET['page'],$pages)) {
            $page=$_GET['page'];
            $home->index($page);
        }else
            include('views/includs/404.php');
        }else{
            $home->index('index');}

    require_once './views/includs/footer.php';
?>