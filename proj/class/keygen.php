<?php 
class keygen {
    public function generateRandomKey($length = 16) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
        $charactersLength = strlen($characters);
        $randomKey = '';
        for ($i = 0; $i < $length; $i++) {
            $randomKey .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomKey;
    }
}