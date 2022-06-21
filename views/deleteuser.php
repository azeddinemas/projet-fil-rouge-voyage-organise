<?php
    if(isset($_POST['id'])){
        $del=new UserController();
        $del->deleteUser();
    }
    if (isset($_SESSION['user'])) {
        Redirect::to('index');
    }
   
?>