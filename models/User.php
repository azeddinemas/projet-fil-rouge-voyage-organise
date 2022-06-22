<?php

    class User extends DB{
        public $id;
        public $nom;
        public $prenom;
        public $email;
        public $adresse;


        public static function getAll(){
            $sql=self::connections()->query("SELECT * FROM users");
            return $sql->fetchAll();
        }

        public static function creatUser($nom,$prenom,$email,$password){
            $sql=self::connections()->query("INSERT INTO users values('','$nom' , '$prenom','$email','$password')");
            return $sql;
        }
        public static function getEmail($email){
            $sql = self::connections()->query("SELECT * FROM users WHERE email='$email'");
            return $sql->rowCount();
        }

        public static function login($email,$password){
            $log=self::connections()->query("SELECT * FROM users WHERE email='$email' and password='$password'");
            return $log;
        }

        public static function getOne($id){
            $sql=self::connections()->query("SELECT * FROM users where id ='$id'");
            return $sql->fetch();

        }

        public static function update($nom,$prenom,$email,$password,$id){
            $sql=self::connections()->query("UPDATE users SET nom='$nom',prenom='$prenom',email='$email',password='$password' WHERE id='$id'");
            return $sql;
        }

        public static function delete($id){    
            $sql=self::connections()->query("DELETE FROM `users` WHERE id='$id'"); 
            return $sql;
        }
        
        

    }


?>