<?php

class UserController
{


    public function getAllUsers()
    {
        $users = User::getAll();
        return $users;
    }

    public function Register()
    {
        if (isset($_POST['submit'])) {

            $nom = $this->Checkinput($_POST['nom']);
            $prenom = $this->Checkinput($_POST['prenom']);
            $email = $this->Checkinput($_POST['email']);
            $password = $this->Checkinput($_POST['password']);
            $config = $this->Checkinput($_POST['config']);
            if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($password)) {
                if ($password == $config) {
                   $passwordhash = password_hash($password,PASSWORD_DEFAULT);
                    $result = user::creatUser($nom, $prenom, $email, $passwordhash);
                    if ($result) {
                        Session::set('success', 'Compte Crée');
                        Redirect::to('login');
                    } else
                        echo $result;
                    
                }else
                    $_COOKIE['password'] = '<div class="alert alert-danger">password incorrect</div>';

            }else 
                $_COOKIE['vide'] = '<div class="alert alert-danger">tout les champe obligé</div>';

        }
    }

    public function auth()
    {
        if (isset($_POST['submit']))
        {

            $email = $this->Checkinput($_POST['email']); 
            $log = User::login($email);
            $password =$_POST['password'];
            if (password_verify($password, $log["password"])) 
            {

                // $log = User::login($email);
                // $row = $log->rowCount();
                // $fetch = $log;
                // if ($row == 1) {
                $_SESSION['user'] = $log['prenom'];
                Redirect::to('index');
            }   else $_COOKIE['password'] = '<div class="alert alert-danger">password incorrect</div>';    
       }
    }
 

    public function getOneUser()
    {
        if (isset($_POST['id'])) {
            $dd = User::getOne($_POST['id']);
            return $dd;
        }
    }

    public function updateUser()
    {
        if (isset($_POST['submit'])) {

            $result = User::update($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['id']);
            if ($result) {
                Session::set('success', 'User Modifié');
                Redirect::to('client');
            } else
                echo $result;
        }
    }

    public function deleteUser()
    {
        if (isset($_POST['id'])) {
            $result = user::delete($_POST['id']);
            if ($result) {
                Session::set('success', 'User supprimé');
                Redirect::to('client');
            } else
                echo $result;
        }
    }

    public static function logout()
    {
        session_destroy();
    }

    public function Checkinput($data)
    {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
