<?php 
    require_once __DIR__ . '/functions.php';

    $charList = [
        'abcdefghiklmnopqrstuvwxyz',
        '0123456789',
        '!?&%$<>^+-*/()[]{}@#_='
    ];

    $charAll = 'abcdefghiklmnopqrstuvwxyz0123456789!?&%$<>^+-*/()[]{}@#_='
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/general.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title> Strong Password Generator </title>
</head>
<body>
    <div class="container">
        <h1 class="color-aqua text-center"> PHP STRONG PASSWORD GENERATOR </h1>

        <form class="mt-5 text-center" action="success.php" method="get">
            <button class="btn btn-primary" type="submit"> Crea </button>
            <button class="btn btn-primary" type="reset"> Annulla </button>
        </form>
    </div>
</body>
</html>