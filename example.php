<?php

require_once 'Ciphers.php';
require_once 'CryptoFactory.php';

$algorithm = 'caesar'; 
$shift = 3;

$cipher = CryptoFactory::createCipher($algorithm);

$plainText = 'HELLO';
$encryptedText = $cipher->encrypt($plainText, $shift);
$decryptedText = $cipher->decrypt($encryptedText, $shift);

echo "Original: $plainText\n";
echo "Encrypted: $encryptedText\n";
echo "Decrypted: $decryptedText\n";

$inputString = "Hello, World! \n";
$reversedString = reverseString($inputString);
echo $reversedString;
echo reverseString(' abcde ');
echo reverseString(' hola mundo!');

?>
