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


function generate_password($password_length, $numbers, $letters, $symbols)
{
    if ($password_length > 0 && $password_length < 30) {

        $numbers = '0123456789';
        $letters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXY';
        $symbols = '.-_?!/+<>^][@#)(/&%$£*°ç={}\'/|:,;"~';
        $characters = '';

        if ($numbers !== null) {
            $characters .= $numbers;
        }

        if ($letters !== null) {
            $characters .= $letters;
        }

        if ($symbols !== null) {
            $characters .= $symbols;
        }

        //$characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789.-_?!/+<>^][";

        for ($i = 0; $i < $password_length; $i++) {

            $char = rand(0, strlen($characters) - 1);

            $new_password[$i] = $characters[$char];
        }
    }

    return (implode('', $new_password));
}*/