<?php

    class Admin extends DB{

        static public function login($email,$password){
            $sql = self::connections()->query("SELECT * FROM `admin` WHERE email='$email' && `password`='$password'");
            return $sql;
        }
    }


?>