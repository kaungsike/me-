<?php

echo "<pre>";

$photoes = $_FILES['photoes']['name'];

$folder = 'photo';

if(!is_dir($folder)){
    mkdir($folder,0777);
}

foreach($photoes as $key=>$photo){

    $extension = pathinfo($photo)['extension'];

    $name = uniqid().'.'.$extension;

    move_uploaded_file($_FILES['photoes']['tmp_name'][$key],'./'.$folder.'/'.$name);
    
}

header('location:./gallery.php');