<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $users = [
                0 => ['name' => "chris", 'x' => 4, 'y' => 2],
                1 => ['name' => 'helena', 'x' => 7, 'y' => 8],
                2 => ['name' => 'lisa', 'x' => 2, 'y' => 4],
                3 => ['name' => 'mystic', 'x' => 5, 'y' => 3],
                4 => ['name' => 'tim', 'x' => 1, 'y' => 9],
            ];

            // foreach ($users as $index => $user) {
            //     echo $user['name'] . ':' . $user['y'] . '-' . $user['x'] . '<br>';
            // }
        ?>

        <?php for ($y=1; $y <= 10; $y++): ?>
            <div class='row'>
                <?php for ($x=1; $x <= 10; $x++): ?>
                    <div class='cell'>
                        <?php foreach ($users as $index => $user):
                                if ($user['x'] === $x && $user['y'] === $y): ?>
                                <img src="/images/<?php echo $user['name']?>.png" alt="photo de <?php echo $user['name']?>">
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
    </main>
</body>
</html>