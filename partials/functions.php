<?php

//function random password
function get_random_pass($n){

    //lenght comes from user
    $pass_length = $n;
    $password = '';

    for($i = 0; $i < $pass_length; $i++) {
        $password .= chr(rand(65, 125)); //chr is a function to get ASCII characters
    }
  return $password;
}

?>