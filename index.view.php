<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

        <ul>
            <?php foreach ($tasks as $task) : ?>
                <?php if ($task->completed) : ?>
                    <strike>
                        <li><?= $task->descriptions; ?> </li>
                    </strike>


                <?php else : ?>
                    <li><?= $task->descriptions; ?> </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>



</body>

</html>