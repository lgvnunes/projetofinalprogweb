<?php

/*
echo "Testando Virtual Directories no GearHost !!";
*/

$texto = "eu não sou besta pra tirar onda de herói";

echo substr($texto, 0, 16);  // eu não sou besta
echo "<br>\\n";
echo substr($texto, 11);     // besta pra tirar onda de herói
echo "<br>\\n";
echo substr($texto, 11, 9);  // besta pra
echo "<br>\\n";
echo substr($texto, -5);     // herói
echo "<br>\\n";

/*phpinfo();*/

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=database', 'root', '6543');
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

var_dump($pdo);

