<?php
session_start();

var_dump($_SESSION["password"]);

if (isset($_GET['password_length'])) {
    $password_length = $_GET['password_length'];

    session_start();

    if ($password_length !== '') {

        include __DIR__ . '/partials/functions.php';

        $password = generate_password($password_length);

        $_SESSION["password"] = $password;

        var_dump($_SESSION["password"]);
    };
} else {
    var_dump('no password_length');
}

header('Location: ./index.php');
