<?php 

$listChars = [
    'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
    '0123456789',
    '!£$%&?<>()[]{}@#'
];

$allChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$%&?<>()[]{}@#';

require_once __DIR__ . '/function.php';

$min = 8;
$max = 32;
$output = "Genera una password di lunghezza compresa fra $min e $max caratteri";

// var_dump($_SERVER);

if (isset($_GET["tentacles"]) && !empty($_GET["tentacles"])) {
    $tentacles = (int)$_GET["tentacles"];  // Assicurati che sia un intero
    if ($tentacles < $min || $tentacles > $max) {
        $output = "Errore, la password deve avere una lunghezza compresa fra $min e $max caratteri";
    } else {
        session_start();
        $psw = generatePassword($allChars, $tentacles);  // Usa $allChars
        $_SESSION["password"] = $psw;
        $output = 'La password generata è: ' . htmlspecialchars($psw);
    }
}

?>


<!doctype html>
<html lang="en">
    <head>
        <title>PHP Strong Password Generator</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- link css -->
         <link rel="stylesheet" href="./css/general.css" >
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container text-center my-5">
            <div class="row">
                <div id="top" class="my-5">
                    <h1>Strong Password Generator</h1>
                </div>

                <div id="mid" class="my-2">
                    <span><?php echo $output ?></span>
                </div>

                <div id="bot" class="my-2">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                        <div class="d-flex justify-content-around">
                            <span>Lunghezza password:</span>
                            <input type="number" id="tentacles" name="tentacles" />
                        </div>
                        <div>
                            <button class="btn btn-primary">Crea</button>
                            <button class="btn btn-secondary">Reset</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>