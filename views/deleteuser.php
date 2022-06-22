<?php
    if(isset($_POST['id'])){
        $del=new UserController();
        $del->deleteUser();
    }
    
   
?>