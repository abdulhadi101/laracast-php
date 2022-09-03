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
