<?php

// get user input
$length = $_GET['length'] ?? null;
$repeat = $_GET['repeat'] ?? null;

//redirect to password page
if($length){
    session_start();
    $_SESSION['length'] = $length;
    $_SESSION['repeat'] = $repeat;
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
        <form action="#" method="GET">

            <!-- password's length -->
            <div class="d-flex justify-content-between align-item-center">
                <label for="length" class="d-block">Lunghezza password:</label>
                <input class="input-group-text" id="length" name="length" type="number" min="8" max="15" step="1">
            </div>

            <!-- radio checkers -->
            <div class="d-flex justify-content-between align-item-center pt-3">
                <span>Consentire ripetizione caratteri:</span>
                <div class="d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="repeat" id="yes_repeat" value="si" checked>
                        <label class="form-check-label pe-3" for="yes_repeat">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="repeat" id="no_repeat" value="no">
                        <label class="form-check-label" for="no_repeat">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- button -->
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary mt-4">INVIA</button>
            </div>

            
        </form>

    </div>
</body>
</html>