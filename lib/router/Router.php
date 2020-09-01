<?php
namespace lib\router;
use \Controllers\signupController;
use \Controllers\loginController;
class Router
{
    public function __construct($route) {
        $controller = null;
        if ($route == "test/test") {
            $controller = new signupController();
            $controller->show();
        }

        if ($route == "auth/signup") {
            $controller = new signupController();
            $controller->store($_POST);
        }

        if ($route == "auth/login") {
            var_dump($_POST);
        }

        if ($route == "panel") {
            $controller = new loginController();
            if ($controller->checkLogin() == true) {
                header("Location: /khateroshan/Views/login/panel/index.php");
            }
        }

        if ($route == "user/logout") {
            $controller = new loginController();
            $controller->logout();
            header("Location: /khateroshan/");
        }
    }

}