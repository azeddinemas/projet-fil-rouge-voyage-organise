<?php

    class contactController{
        public function getAllContact(){
            $contact = Contact::getAll();
            return $contact;
        }
        public function addContact(){
            if (isset($_POST['submit'])) {

                $result=Contact::add($_POST['nom'],$_POST['email'],$_POST['subject'],$_POST['message']);
                if ($result) {
                    Session::set('success','message Envoyé');
                    Redirect::to('index');
                }else 
                    echo $result;
            }
        }
    }

?>