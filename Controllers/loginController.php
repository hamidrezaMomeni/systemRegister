<?php

namespace Controllers;
session_start();
class loginController
{
    public function __construct() {
        
    }

    public function show() {
        return header("Location: ../Views/login/index.php");
    }

    public function checkLogin() {
        if(isset($_SESSION['userLogedIn'])) {
            return true;
            // return header("Location: ../Views/login/panel/index.php");
        }
    }

    public function logout() {
        unset($_SESSION['userLogedIn']);
    }
}