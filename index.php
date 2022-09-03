<?php

require 'Task.php';

require 'function.php';

$pdo = connectToDb();

$tasks = fetchAllTask($pdo);





require 'index.view.php';
