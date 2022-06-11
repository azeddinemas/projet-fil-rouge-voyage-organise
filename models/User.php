<?php

    class User extends DB{
        public $id;
        public $nom;
        public $prenom;
        public $cin;
        public $email;
        public $adresse;
        public $role;


        public static function getAll(){
            $sql=self::connections()->query("SELECT * FROM users");
            return $sql->fetchAll();
        }

        public static function add($nom,$prenom,$email,$adresse,$cin,$role){
            $sql=self::connections()->query("INSERT INTO users values('','$nom' , '$prenom','$email','$adresse','$cin','$role')");
            return $sql;
        }

        public static function getOne($id){
            $sql=self::connections()->query("SELECT * FROM users where id ='$id'");
            return $sql->fetch();

        }

        public static function update($nom,$prenom,$email,$adresse,$cin,$role,$id){
            $sql=self::connections()->query("UPDATE users SET nom='$nom',prenom='$prenom',email='$email',adresse='$adresse',cin='$cin',role='$role' WHERE id='$id'");
            return $sql;
        }

        public static function delete($id){    
            $sql=self::connections()->query("DELETE FROM `users` WHERE id='$id'"); 
            return $sql;
        }

    }


?>