<?php

class CaesarCipher {
    public function encrypt($text, $shift) {
        $result = '';
        foreach (str_split($text) as $char) {
            if (ctype_upper($char)) {
                $result .= chr(((ord($char) - 65 + $shift) % 26) + 65);
            } else {
                $result .= $char; 
            }
        }
        return $result;
    }

    public function decrypt($text, $shift) {
        return $this->encrypt($text, 26 - $shift);
    }
}

class ROT13Cipher {
    public function encrypt($text) {
        return str_rot13($text);
    }

    public function decrypt($text) {
        return $this->encrypt($text);
    }
}
?>