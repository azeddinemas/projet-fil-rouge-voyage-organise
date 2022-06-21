<?php
    if(isset($_POST['id'])){
        $del=new ProductController();
        $del->deleteProduct();
    }
    if (isset($_SESSION['user'])) {
        Redirect::to('index');
    }
   
?>
