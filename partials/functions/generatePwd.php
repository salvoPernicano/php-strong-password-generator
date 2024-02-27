<?php

function generatePwd($passwordLength){
    $string = '';
    for ($i = 0; $i < $passwordLength; $i++){
        $string .= (chr(rand(33, 122)));
    };
   return $string;
}