<?php

 session_start();
 $_SESSION['length'];
 $_SESSION['repeat'];

 $length = $_SESSION['length'];
 $repeat = $_SESSION['repeat'];

include 'partials/functions.php';

?>


<!DOCTYPE html>
<html lang="it">

<?php include 'partials/head.php' /***HEAD***/ ?>

<!-- alert -->
<div class="container wrap">
    <div class="alert alert-primary mt-5"> 
        <b class="pe-4">La tua password è: </b> 
         <?php echo get_random_pass($length, $repeat) ?>
        </div>

    <!-- btn to get back to homepage -->
    <a class="btn btn-primary" href="http://localhost/php-strong-password-generator/index.php">torna indietro</a>    
</div>

</html>