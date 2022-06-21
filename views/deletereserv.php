<?php
    if(isset($_POST['id'])){
        $del=new ReserveController();
        $del->deleteReserv();
    }
   
?>