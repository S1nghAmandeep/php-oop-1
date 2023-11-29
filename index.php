<?php


require_once __DIR__ . './model/Production.php'

// var_dump($movies);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie list</title>
</head>

<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Film</th>
                    <th>Language</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $film) { ?>
                    <tr>
                        <td><?php echo $film->title ?></td>
                        <td><?php echo $film->language ?></td>
                        <td>
                            <?php for ($i = 0; $i < $film->rating; $i++) { ?>
                                &starf;
                            <?php }
                            for ($i = 0; $i < 5 - $film->rating; $i++) { ?>
                                &star;
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>