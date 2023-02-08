<?php

//function random password
function get_random_pass($n){

    if(is_numeric($n) && $n >= 8 && $n <= 15) { //input validation
        $password = '';

        for($i = 0; $i < $n; $i++) {
            $password .= chr(rand(65, 125)); //chr is a function to get ASCII characters
        }
    return $password;
    } else {
        return 'Non hai inserito un valore valido';
    }
}

?>