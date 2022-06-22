<?php

    class ReserveController {

        public function getAllReserv(){
            $users= Reserve::getAll();
            return $users;
        }

        public function addReserv(){
            if (isset($_POST['submit'])) {
                $voyage = $this->Checkinput($_POST['voyage']);
                $nom = $this->Checkinput($_POST['nom']);
                $prenom = $this->Checkinput($_POST['prenom']);
                $phone = $this->Checkinput($_POST['phone']);
                $ville = $this->Checkinput($_POST['ville']);
                $adresse = $this->Checkinput($_POST['adresse']);

                if (!empty($voyage) && !empty($nom) && !empty($prenom) && !empty($phone) && !empty($ville) && !empty($adresse)) {
                    $result=Reserve::add($voyage,$nom,$prenom,$phone,$ville,$adresse);
                    if ($result) {
                        Session::set('success','votre reservation Ajouté');
                        Redirect::to('index');
                    }else 
                        echo $result;
                } else
                    $_COOKIE['reserve'] = '<div class="alert alert-danger">tout les champe obligé</div>';
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
        public function Checkinput($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


    }


?>