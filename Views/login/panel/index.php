<?php session_start(); if(!isset($_SESSION['userLogedIn'])) {header("Location: /khateroshan/Views/signup/");} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>panel </h1>
    <a href="/khateroshan/user/logout">Logout</a>
</body>
</html>