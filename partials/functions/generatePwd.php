<?php

function generatePwd($passwordLength){
    $string = '';
    for ($i = 0; $i < $passwordLength -2; $i++){
        $string .= strtolower(chr(rand(65, 90)));
    };
    for ($j = 0; $j < 2; $j++){
        $string .= rand(0,9);
    }
   return $string;
}