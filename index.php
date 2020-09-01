<?php

require_once "autoload.php";
use \lib\router\Router;

if (isset($_GET['route'])) {
    $router = new Router($_GET['route']);
}

?>

<a href="test/test">signup | login</a>