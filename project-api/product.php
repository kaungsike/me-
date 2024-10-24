<?php

header("Content-Type:application/json");

if($_SERVER['REQUEST_METHOD'] != 'GET'){
    die("GET method only!");
}

$folder = 'products';

$datas = array_filter(scandir($folder), fn ($el) => $el !='.' && $el !='..');



$result = [];


foreach($datas as $product){
    $content = file_get_contents($folder."/".$product);
    $obj = $content;
    array_push($result,$obj);
}


print_r($result);