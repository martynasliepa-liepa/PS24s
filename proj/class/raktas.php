<?php

class raktas {
function aes128_encrypt($plaintext, $randomKey) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-128-cbc'));
    $encrypted = openssl_encrypt($plaintext, 'aes-128-cbc', $randomKey, 0, $iv);
    return base64_encode($iv . $encrypted);
}

function aes128_decrypt($encrypted_data, $randomKey) {
    $data = base64_decode($encrypted_data);
    $iv_length = openssl_cipher_iv_length('aes-128-cbc');
    $iv = substr($data, 0, $iv_length);
    $ciphertext = substr($data, $iv_length);
    $decrypted = openssl_decrypt($ciphertext, 'aes-128-cbc', $randomKey, 0, $iv);
    return $decrypted;
}
}
?>


