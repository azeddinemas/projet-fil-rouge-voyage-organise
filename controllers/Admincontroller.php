<?php

class adminController{

    public function auth(){
        if (isset($_POST['submit'])) {
            
            $password = sha1($_POST['password']);
            $sql = Admin::login($_POST['email'], $password);
            $fetch = $sql->fetch();

            if ($sql->rowCount() == 0) {
                $_COOKIE['error'] = '<div  class="alert alert-danger" role="alert">Email or Password incorrect</div>';
            } else {
                $_SESSION['admin'] = $fetch['name'];
                Redirect::to('dashboard');
            }
        }
    }

    public function logout(){
        session_destroy();
    }

}
