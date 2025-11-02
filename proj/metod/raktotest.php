<?php
include_once '../class/raktas.php';
include_once '../class/keygen.php';

$raktas = new raktas();
$plaintext = "This is a secret message.";  
$randomKey = '1234567890abcdef477777777777777';
echo $raktas->aes128_encrypt($plaintext, $randomKey);
echo $raktas->aes128_decrypt($raktas->aes128_encrypt($plaintext, $randomKey), $randomKey);

$keygen = new keygen();
$randomKey = $keygen->generateRandomKey(16);
echo "Generated Random Key: " . $randomKey;

?>
