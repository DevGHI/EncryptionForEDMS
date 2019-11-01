<?php
require_once '../class/AES.php';

function encryption(){
    $plain_text=$_POST['plain_text'];
    $secret_key=$_POST['secret_key'];
    $block_size=128;
    $obj=new AES($plain_text,$secret_key,$block_size);
    return ['encryt'=>$obj->encrypt()];
}

function decryption(){
    $cipher_text=$_POST['cipher_text'];
    $secret_key=$_POST['secret_key'];
    $block_size=128;
    $obj=new AES($cipher_text,$secret_key,$block_size);
    return strlen($obj->decrypt()) > 0 ? ['decrypt'=>$obj->decrypt()] : ['decrypt'=>'none'];
}

function response($data_arr){
    return json_encode($data_arr);
}