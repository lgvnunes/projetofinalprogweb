<?php


echo "<p><h>Testando Virtual Directories no GearHost !!</h></p>";

phpinfo();

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=database', 'root', '6543');
} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

var_dump($pdo);

