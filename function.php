<?php 

function generatePassword($charList, $tentacles) {
    $psw = '';

    while (strlen($psw) < $tentacles) {
        $char = getChar($charList);
        $psw .= $char;
    }

    return $psw;
}

function getChar($charList){
    return $charList[rand(0, strlen($charList)-1)];
}

?>