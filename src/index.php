<?php

$con = new mysqli('localhost', 'kek', 'titok','kek');

if($con -> connect_error){
    die('Hiba! Sikertelen kapcsolódás!');
}

// echo "ok";

$sql = <<< EOT
select*from dolgozok

EOT;
if($result = $con-> query($sql)){
    echo "Lekérés ok";
}else{
    echo "Hiba! Lekérés sikertelen";
}
while($row = $result->fetch_assoc()){
    echo $row['nev'];
}

$con -> close();