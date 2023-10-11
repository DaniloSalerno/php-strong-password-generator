<?php


function generate_password($password_length)
{
    if ($password_length > 0 && $password_length < 30) {

        $characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789.-_?!/+<>^][";

        for ($i = 0; $i < $password_length; $i++) {

            $char = rand(0, strlen($characters) - 1);

            $new_password[$i] = $characters[$char];
        }
    }

    return (implode('', $new_password));
}



/* 
<?php
session_start();

if (isset($password_length) && $password_length !== '') {

    $password = generate_password($password_length, $number, $letters, $symbol);

    $_SESSION["password"] = $password;

    //var_dump($_SESSION["password"]);
};

function generate_password($password_length, $number, $letters, $symbol)
{
    if ($password_length > 0 && $password_length < 30) {

        if ($number !== null) {
            $number = '0123456789';
        }

        if ($letters !== null) {
            $letters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXY';
        }

        if ($symbol !== null) {
            $symbol = '.-_?!/+<>^][';
        }

        //$characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789.-_?!/+<>^][";
        $characters = $number . $letters . $symbol;

        for ($i = 0; $i < $password_length; $i++) {

            $char = rand(0, strlen($characters) - 1);

            $new_password[$i] = $characters[$char];
        }
    }

    return (implode('', $new_password));
}; */