<?php
    $obj = new adminController();
    $obj->logout();
    Redirect::to('admin');

?>