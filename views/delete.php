<?php
    if(isset($_POST['id'])){
        $del=new UserController(); 
        $del->deleteUser(); 
        // header("location:".BASE_URL);
    }
   
?>
