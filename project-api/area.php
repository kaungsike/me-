<?php

header("Content-Type:application/json");

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die("POST method only!");
}

if(empty($_POST['width']) || empty($_POST['breadth'])){
    die("Need all inputs");
}

$area = $_POST['width'] * $_POST['breadth'];



$_POST['area'] = $area;

echo json_encode($_POST);