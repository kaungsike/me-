<?php

header("Content-Type:application/json");

if($_SERVER['REQUEST_METHOD'] != "POST"){
    die("POST method only");
}
if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['rate']) || empty($_FILES['photo'])){
    die("Need all inputs");
}


$folder = 'product-photo';
$productFolder = 'products';

if(!is_dir($folder)){
    mkdir($folder,0777);
}
if(!is_dir($productFolder)){
    mkdir($productFolder,0777);
}


$name = $_POST['name'];
$price = $_POST['price'];
$rate = $_POST['rate'];

$extension = pathinfo($_FILES['photo']['name'])['extension'];

$saveFileName = './'.$folder.'/'.uniqid().'.'.$extension;

$_POST['photo'] = $saveFileName;

if(move_uploaded_file($_FILES['photo']['tmp_name'],$saveFileName)){
    print_r("Success!");
}


$json = json_encode($_POST);

print_r($json);

$productFileName = './'.$productFolder.'/'.uniqid().'.json';

touch($productFileName);

$fileStream = fopen($productFileName,'w');

fwrite($fileStream,$json);

fclose($fileStream);