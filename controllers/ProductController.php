<?php


    class ProductController{

        public function getAllProduit(){
            $users= Product::getAll();
            return $users;
        }

        public function addProduct(){

            if (isset($_POST['submit'])) {
                $_SESSION['localisation']=$_POST['localisation'];

                $file_name = $_FILES['img']['name'];
                $file_tmp =$_FILES['img']['tmp_name'];
                move_uploaded_file($file_tmp,"views/assets/img/".$file_name);
                $result=Product::add($_POST['localisation'],$_POST['prix'],$_POST['promotion'],$_POST['description'],$file_name);
                
                if ($result) {
                  


                    Session::set('success','voyage Ajouté');
                    Redirect::to('voyage');
                }else 
                    echo $result;
            }
        }

        public function getOneProduct(){
            if (isset($_POST['id'])) { 
                $dd=Product::getOne($_POST['id']);
                return $dd;    
            }   
        }

        public function updateProduct(){
            if (isset($_POST['submit'])) {
                  
                $file_name = $_FILES['img']['name'];
                $file_tmp =$_FILES['img']['tmp_name'];
                move_uploaded_file($file_tmp,"views/assets/img/".$file_name);
              
                $result=Product::update($_POST['localisation'],$_POST['prix'],$_POST['promotion'],$_POST['description'],$_FILES['img']['name'],$_POST['id']);
                if ($result) {
                    Session::set('success','Voyage Modifié');
                    Redirect::to('voyage');
                }else 
                    echo $result;
            }
        }

        public function deleteProduct(){
            if (isset($_POST['id'])) {
                $result=Product::delete($_POST['id']);
                if ($result) {
                    Session::set('success','voyage supprimé');
                    Redirect::to('voyage');
                }else 
                    echo $result;
            }
        }
    }
?>