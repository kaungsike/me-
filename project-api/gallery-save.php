<?php

header("Content-Type:application/json");

if($_SERVER['REQUEST_METHOD'] != "POST"){
    die("POST method only!");
}

if(empty($_FILES['photo'])){
    die("Need file input");
}

$folder = 'photo';

if(!is_dir($folder)){
    mkdir($folder,0777);
}

$extension = pathinfo($_FILES['photo']['name'])['extension'];


$saveFileName = $folder.'/'.uniqid().'.'.$extension;

// move_uploaded_file($_FILES['photo']['tmp_name'],$saveFileName)

if(move_uploaded_file($_FILES['photo']['tmp_name'],$saveFileName)){
    echo "Upload successful!";
}
