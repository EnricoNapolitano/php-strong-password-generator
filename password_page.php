<?php

 session_start();
 $_SESSION['length'];

include 'partials/functions.php';

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
</head>

<!-- alert -->
<div class=" container alert alert-primary mt-5"> 
    <b class="pe-4">La tua password è: </b> 
     <?php echo get_random_pass($_SESSION['length']) ?>
</div>
</html>