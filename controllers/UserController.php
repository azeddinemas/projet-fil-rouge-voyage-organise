<?php

    class UserController{

        public function getAllUsers(){
            $users= User::getAll();
            return $users;
        }

        public function addUser(){
            if (isset($_POST['submit'])) {
                user::add($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['adresse'],$_POST['cin'],$_POST['role']);
                Redirect::to('home');
            }
        }

        public function getOneUser(){
            if (isset($_POST['id'])) { 
                $dd=User::getOne($_POST['id']);
                return $dd;    
            }   
        }

        public function updateUser(){
            if (isset($_POST['submit'])) {
                User::update($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['adresse'],$_POST['cin'],$_POST['role'],$_POST['id']); 
                Redirect::to('home');
            }
        }

        public function deleteUser(){
            if (isset($_POST['id'])) {
                user::delete($_POST['id']); 
                Redirect::to('home');
            }
        }
    }
?>