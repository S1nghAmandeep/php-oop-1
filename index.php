<?php


require_once __DIR__ . './model/Production.php';
require_once __DIR__ . './model/Movie.php';
require_once __DIR__ . './model/Series.php';

$marvel = new Movie('Thor', 'Ita', 4, '2h', '100M');
$dc = new Movie('Batman', 'Ita', 3, '3h', '50M');
$disney = new Movie('Toy Story', 'Ita', 5, '1.5h', '200M');
$iron_Man = new Movie('Iron Man', 'ita', 5, '2h', '200M');
$titanic = new Movie('Titanic', 'ita', 5, '3h', '500M');
$suits = new Series('Suits', 'Ita', 4, '10 seasons');
$loki = new Series('Loki', 'ita', 4, '2 seasons');
$friends = new Series('Friends', 'ita', 3, '15 seasons');
$build = new Series('Build', 'ita', 3, '10 seasons');
$time = new Series('Time', 'ita', 2, '1 season');

// var_dump($marvel, $dc, $suits, $loki);

$movies = [
    $marvel,
    $dc,
    $disney,
    $iron_Man,
    $titanic,
    $suits,
    $loki,
    $friends,
    $build,
    $time,

];

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
                    <th>Duraction</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $film) { ?>
                    <tr>
                        <td><?php echo $film->title ?></td>
                        <td><?php echo $film->language ?></td>
                        <td>
                            <?php echo $film->getRatingHTML() ?>
                        </td>
                        <td>
                            <?php if (get_class($film) === 'Movie') {
                                echo $film->getDuraction();
                            } else {
                                echo $film->getSeason();
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>