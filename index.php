<?php

/* 
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. 

✅Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

✅Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
leggete le slide sulla session e la documentazione

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. */




//Can be 'on' or null
/* $number = $_GET['number'];
$letters = $_GET['letters'];
$symbol = $_GET['symbol']; */

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-4">

        <!-- ./partials/password.php -->
        <!-- SE FACCIO IL REDIRECT VERSO PASSWORD.PHP RIESCO A VISUALIZZARE LA PASSWORD CORRETTA SOLO LA PRIMA VOLTA,SUCCESSIVAMENTE AD OGNI SUBMIT VISUALIZZO SEMPRE LA STESSA -->
        <form method="get" action="" class="d-flex align-items-center justify-content-center gap-3">
            <label for="password_length" class="form-label">How long to be the password? Set number between 0 and 30</label>
            <input type="number" class="form-control" name="password_length" id="password_length" aria-describedby="helpId" placeholder="0" style="width: 70px;">

            <div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="number" id="number">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Number</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="letters" id="letters">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Letters</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="symbol" id="symbol">
                    <label class="form-check-label" for="flexSwitchCheckDisabled">Symbol</label>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Generate</button>
        </form>
    </div>
    <!-- /.container -->

    <div class="container mt-4">

        <?php if (isset($password) && $password !== null && $password !== '') : ?>

            <div class="alert alert-success" role="alert">
                <strong>Password:</strong> <?= $password ?>
            </div>

        <?php endif ?>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>