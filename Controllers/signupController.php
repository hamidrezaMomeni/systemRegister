<?php

namespace Controllers;
use Models\UsersTbl;
session_start();
class signupController
{
    public function __construct() {
        
    }

    public function show() {
        return header("Location: ../Views/signup/index.php");
    }

    public function store(array $data) {
        if ($this->validateData($data) == true) {
            $model = new UsersTbl();
            $model->insertUser($data);
        }
    }

    private function validateData($data) {
        return true;
    }

    
}