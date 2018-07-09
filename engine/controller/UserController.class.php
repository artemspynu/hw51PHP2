<?php

class UserController extends Controller{

    public $login;
    public $password;

    function index($data){
        return $this->login();
    }

    function login(){
        var_dump($_POST);
        $login = $_POST['login'];
        if (empty($login)){
            echo "Error";
        } else {
            echo "$login";
        }
    }

    function password(){
        $password = $_POST['password'];
        var_dump(empty($_POST['password']));
    }

    function log(){
        $this->login();
        $this->password();
    }
}
