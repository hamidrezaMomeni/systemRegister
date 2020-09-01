<?php

spl_autoload_register("autoloader");

function autoloader($className) {
    if (preg_match('/\\\\/', $className)) {
        $classPath = str_replace('\\', '/', $className);
        $classPath = __DIR__ . '/' . $classPath . ".php";
        include_once $classPath;
    }
}