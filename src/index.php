<?php

$con = new mysqli('localhost', 'kek', 'titok','kek');

if($con -> connect_error){
    die('Hiba! Sikertelen kapcsolódás!');
}

echo "ok";
$con -> close();