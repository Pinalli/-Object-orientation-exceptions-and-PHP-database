<?php

/* https://www.php.net/manual/pt_BR/book.pdo.php
*/


declare(strict_types = 1);

/*$localhost = "localhost";
$user = "root";
$password = "4321";
$banco = "phpdb";

$pdo = new PDO("mysql:dbname=".$banco."; host=" .$localhost, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->query("SELECT * FROM produtos");
$sql->execute();

echo $sql->rowCount();

?> */

$pdo = null;

try{
    $pdo = new PDO('mysql:host=localhost; dbname=phpdb', 'root', '4321');

    } catch (Exception $e) {

        echo $e->getMessage();
    }

    return $pdo;