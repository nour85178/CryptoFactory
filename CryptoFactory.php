<?php

class CryptoFactory {
    public static function createCipher($algorithm) {
        switch ($algorithm) {
            case 'caesar':
                return new CaesarCipher();
            case 'rot13':
                return new ROT13Cipher();
            // Add more algorithms as needed
            default:
                throw new Exception("Unsupported algorithm: $algorithm");
        }
    }
}

function reverseString($input) {
    $length = strlen($input);
    $reversed = '';

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $input[$i];
    }

    return $reversed;
}

f();
function f() {
    console.log('f');
}

g();
var g = function (){
    console.log('g');
};
?>
