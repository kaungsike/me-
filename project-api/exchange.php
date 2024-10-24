<?php

header("Content-Type:application/json");


if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die("POST method only!");
}

// if(empty($_POST['ammount']) || empty($_POST['from']) || empty($_POST['to'])){
//     die("Need all inputs");
// }

$json = json_decode(file_get_contents('http://forex.cbm.gov.mm/api/latest'),true)['rates'];

$ammount = $_POST['ammount'];
$from = $_POST['from'];
$to = $_POST['to'];

$from_currency = str_replace(',','',$json[$from]);
$to_currency = str_replace(',','',$json[$to]);

$result = round(($ammount * $from_currency) / $to_currency,3); 

$_POST['result'] = $result.' '.$to;

print_r(json_encode($_POST));



// print_r(file_get_contents('http://forex.cbm.gov.mm/api/latest'));