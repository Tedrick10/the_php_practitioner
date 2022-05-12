<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning Classes</title>
</head>

<body>
    <nav>
        <ul>
            <li> <a href="./about.view.php">About Us</a></li>
            <li><a href="./contact.view.php">Contact Us</a></li>
        </ul>
    </nav>

    <main>
        <h3>My Tasks</h3>

        <?php foreach($tasks as $task) : ?>
        <li>
            <?php if($task -> completed) : ?>
            <del><?= $task -> description ?></del>
            <?php else: ?>
            <?= $task -> description ?>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </main>
</body>

</html>