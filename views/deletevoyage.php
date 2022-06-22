<?php
    if(isset($_POST['id'])){
        $del=new ProductController();
        $del->deleteProduct();
    }
  
   
?>
