<?php


    class VoyageController{

        public function getAllvoyage(){
            $users= voyage::getAll();
            return $users;
        }

        public function addvoyage(){

            if (isset($_POST['submit'])) {
                $_SESSION['localisation']=$_POST['localisation'];

                $file_name = $_FILES['img']['name'];
                $file_tmp =$_FILES['img']['tmp_name'];
                move_uploaded_file($file_tmp,"views/assets/img/".$file_name);
                $result=voyage::add($_POST['localisation'],$_POST['prix'],$_POST['promotion'],$_POST['description'],$file_name);
                
                if ($result) {
                    Session::set('success','voyage Ajouté');
                    Redirect::to('voyage');
                }else 
                    echo $result;
            }
        }

        public function getOnevoyage(){
            if (isset($_POST['id'])) { 
                $dd=voyage::getOne($_POST['id']);
                return $dd;    
            }   
        }

        public function updatevoyage(){
            if (isset($_POST['submit'])) {
                  
                $file_name = $_FILES['img']['name'];
                $file_tmp =$_FILES['img']['tmp_name'];
                move_uploaded_file($file_tmp,"views/assets/img/".$file_name);
              
                $result=voyage::update($_POST['localisation'],$_POST['prix'],$_POST['promotion'],$_POST['description'],$_FILES['img']['name'],$_POST['id']);
                if ($result) {
                    Session::set('success','Voyage Modifié');
                    Redirect::to('voyage');
                }else 
                    echo $result;
            }
        }

        public function deletevoyage(){
            if (isset($_POST['id'])) {
                $result=voyage::delete($_POST['id']);
                if ($result) {
                    Session::set('success','voyage supprimé');
                    Redirect::to('voyage');
                }else 
                    echo $result;
            }
        }
    }
?>