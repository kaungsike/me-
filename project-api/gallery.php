<?php

header("Content-Type:application/json");


if($_SERVER['REQUEST_METHOD'] != "GET"){
    die(
        "GET method only!"
    );
}

$dir = array_values(array_filter(scandir('photo'), fn ($el) => $el !='.' && $el != '..'));

print_r(json_encode($dir));