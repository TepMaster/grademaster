<?php

$data = file_get_contents('https://www.instagram.com/data/shared_data/');
$json = json_decode($data);

$password  = 'password'; //fuck-itdoesntwork;
$publicKey = '8dd9aad29d9a614c338cff479f850d3ec57c525c33b3f702ab65e9e057fc087e';// $json->encryption->public_key;
$keyId     = 154; //$json->encryption->key_id;
$version   = 10; //$json->encryption->version;

print_r(generateEncPassword($password, $publicKey, $keyId, $version));

function encrypt($password, $publicKey, $keyId)
{
    $time = time();
    $key  = openssl_random_pseudo_bytes(32); //'8dd9aad29d9a614c338cff479f850d3e';
    $iv   = openssl_random_pseudo_bytes(12); //'8dd9aad29d9a';

    $aesEncrypted = openssl_encrypt($password, 'aes-256-gcm', $key, OPENSSL_RAW_DATA, $iv, $tag, strval($time));
    $encryptedKey = sodium_crypto_box_seal($key, hex2bin($publicKey));

    return [
        'time'      => $time,
        'encrypted' => base64_encode("\x01" | pack('n', intval($keyId)) . pack('s', strlen($encryptedKey)) . $encryptedKey . $tag . $aesEncrypted)
    ];
}

function generateEncPassword($password, $publicKey, $keyId, $version)
{
    $result = encrypt($password, $publicKey, $keyId);
    return '#PWD_INSTAGRAM_BROWSER:' . $version . ':' . $result['time'] . ':' . $result['encrypted'];
}