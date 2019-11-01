<?php
require_once 'function.php';
$request_method=$_SERVER['REQUEST_METHOD'];

if($request_method == "POST"){
    if($_POST['secret_key'] && $_POST['plain_text']){
        echo response(encryption());
    }else{
        echo response(["error"=>"Something wrong"]);
    }
}else{
        echo response(["error"=>"This method is not support"]);
}