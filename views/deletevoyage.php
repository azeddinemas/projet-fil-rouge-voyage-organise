<?php
    if(isset($_POST['id'])){
        $del=new VoyageController();
        $del->deletevoyage();
    }
  
   
?>
