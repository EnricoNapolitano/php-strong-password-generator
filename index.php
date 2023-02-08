<?php

// get user length
$length = $_GET['length'] ?? null;

//redirect to password page
if($length){
    session_start();
    $_SESSION['length'] = $length;
    header('Location: password_page.php'); 
};

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gneratore password</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        .wrap {
            max-width: 800px;
        }
    </style>
</head>

<body>

    <div class="container wrap pt-5">

        <!-- header -->
        <header class="text-center pb-5">
            <h1>STRONG PASSWORD GENERATOR</h1>
            <h2>Genera una password sicura</h2>
        </header>

        <!-- form -->
        <form action="#" method="GET" class="d-flex justify-content-between">
            <label for="length">Lunghezza password:</label>
            <div>
                <input id="length" name="length" type="number" min="8" max="15" step="1" required>
                <button class="btn btn-primary">INVIA</button>
            </div>
        </form>

    </div>
    
</body>
</html>