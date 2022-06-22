<?php
    class Contact extends DB{
        public static function add($nom,$email,$subject,$message){
            $sql = self::connections()->query("INSERT INTO contact values('','$nom','$email','$subject','$message')");
            return $sql;
        }
        public static function getAll(){
            $sql=self::connections()->query("SELECT * FROM Contact");
            return $sql->fetchAll();
        }
    }
?>