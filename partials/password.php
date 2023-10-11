<?php
session_start();

var_dump($_SESSION["password"]);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-4">

        <?php if (isset($_SESSION['password']) && $_SESSION['password'] !== null && $_SESSION['password'] !== '') : ?>

            <div class="alert alert-success" role="alert">
                <strong>The passowrd generated is:</strong> <?= $_SESSION['password'] ?>
            </div>

        <?php endif ?>

    </div>
    <!-- /.container -->
</body>

</html>