<?php

 session_start();
 $_SESSION['length'];

include 'partials/functions.php';

?>


<!DOCTYPE html>
<html lang="it">

<?php include 'partials/head.php' /***HEAD***/ ?>

<!-- alert -->
<div class=" container alert alert-primary mt-5"> 
    <b class="pe-4">La tua password è: </b> 
     <?php echo get_random_pass($_SESSION['length']) ?>
</div>

</html>