<?php 
    function generatePassword($charList, $length) {
        $psw = '';

        while (strlen($psw) < $length) {
            $char = getChar($charList);
            $psw .= $char;
        }

        return $psw;
    }

    function getChar($charList) {
        return $charList[rand(0, strlen($charList) - 1)];
    }
?>