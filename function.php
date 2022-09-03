<?php


function ageChecker($age)
{

    if ($age >= 15) {
        echo 'You can come In ';
    } else {
        echo "You are too young";
    }
}

function dd($animals)
{
    echo '<pre>';
    die(var_dump($animals));
    echo '</pre>';
}

function connectToDb()
{
    try {
        return  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'Abdul101#');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


function fetchAllTask($pdo)
{
    $statement = $pdo->prepare("select * from todos");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
