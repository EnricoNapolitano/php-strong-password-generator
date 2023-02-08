<?php

//function random password
function get_random_pass($n){

    //lenght comes from user
    $pass_length = $n;
    $password = '';
    for($i = 0; $i < $pass_length; $i++) {
    $password .= chr(rand(32, 126));
  }
  return $password;
}

?>