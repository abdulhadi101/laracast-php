<?php


class Task
{

    public $completed = false;
    public $description;

    public function __construct($description)
    {
        // A
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {

        return $this->completed;
    }
}


$tasks = [
    new Task('Second task'),
    new Task('third task'),
    new Task('fourth task'),
];

$tasks[0]->complete();
var_dump($tasks);
//dd('hello');
// $task = [
//     'title' => "Finish lesson",
//     'due' => 'today',
//     'assigned_to' => "Abdulhadi",
//     'completed' => false,
//     'started' => false,

// ];


require 'index.view.php';
