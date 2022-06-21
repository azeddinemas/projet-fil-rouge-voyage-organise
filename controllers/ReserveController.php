<?php

    class ReserveController {

        public function getAllReserv(){
            $users= Reserve::getAll();
            return $users;
        }

        public function addReserv(){
            if (isset($_POST['submit'])) {
                $result=Reserve::add($_POST['voyage'],$_POST['nom'],$_POST['prenom'],$_POST['phone'],$_POST['ville'],$_POST['adresse']);
                if ($result) {
                    Session::set('success','votre reservation Ajouté');
                    Redirect::to('index');
                }else 
                echo $result;
            }

        }

        public function getOneReserv(){
            if (isset($_POST['id'])) { 
                $dd=Reserve::getOne($_POST['id']);
                return $dd;    
            }   
        }
   
        public function updateReserv(){
            if (isset($_POST['submit'])) {
              
                $result=Reserve::update($_POST['voyage'],$_POST['nom'],$_POST['prenom'],$_POST['phone'],$_POST['ville'],$_POST['adresse'],$_POST['id']);
                if ($result) {
                    Session::set('success','Reservation Modifié');
                    Redirect::to('reservation');
                }else 
                    echo $result;
            }
        }

        public function deleteReserv(){
            if (isset($_POST['id'])) {
                $result=Reserve::delete($_POST['id']);
                if ($result) {
                    Session::set('success','Reservation supprimé');
                    Redirect::to('reservation');
                }else 
                    echo $result;
            }
        }


    }


?>