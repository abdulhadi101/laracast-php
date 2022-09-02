<?php


require 'index.view.php';
try {
$pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'Abdul101#');
}
catch(PDOException $e){
die($e->getMessage());
}
$statement = $pdo->prepare('select * from todos');
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($result);

