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

<?php include 'partials/head.php' /***HEAD***/ ?>

<body>
    <div class="border container wrap p-5 mt-5">

        <!-- header -->
        <header class="text-center pb-5">
            <h1>STRONG PASSWORD GENERATOR</h1>
            <h2>Genera una password sicura</h2>
        </header>

        <!-- form -->
        <form action="#" method="GET" class="d-flex justify-content-between align-items-center">
            <label for="length">Lunghezza password:</label>
            <div class="d-flex align-items-center">
                <input class="input-group-text" id="length" name="length" type="number" min="8" max="15" step="1" required>
                <button class="btn btn-primary ms-2">INVIA</button>
            </div>
        </form>

    </div>
</body>
</html>