<?php
    if (isset($_COOKIE['success'])) {
        echo '<div class="alert alert-success">'.$_COOKIE['success'].'</div>';
    }else if (isset($_COOKIE['error'])) {
        echo '<div class="alert alert-danger">'.$_COOKIE['error'].'</div>';
    }else if (isset($_COOKIE['info'])) {
        echo '<div class="alert alert-info">'.$_COOKIE['info'].'</div>';
    }
?>
