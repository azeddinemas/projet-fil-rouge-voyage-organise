<?php

    class DB{

        public static function connections(){
            $db= new PDO('mysql:host=localhost;dbname=voyage','root','');
            $db->exec("set names utf8");
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            return $db;
        }
        
    }

?>