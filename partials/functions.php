<?php

//function random password
function get_random_pass($n, $r){

    //input validation
    if(!is_numeric($n) || $n <= 8 && $n >= 15) { 
        return 'Non hai inserito un valore valido';
    } else {
        $password = '';
        
        // condition where it is possible to repeat characters
        if($r === 'si') {
                for($i = 0; $i < $n; $i++) {
                $password .= chr(rand(65, 125)); //chr: function to get ASCII characters
                }

        // instead here it is if it's not possible to repeat characters
        } else {
            $i = 0;
            while ($i < $n) {
                $chr = chr(rand(65, 125));
                if (!str_contains($password, $chr)) {
                    $password .= $chr;
                    $i++;
                }
            }
        }
        
        return $password;
    }
}

?>