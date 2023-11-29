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
$Avengers = new Movie('Age of Ultron', 'ita', 5, '2.5h', '400M');
$Sherlock = new Series('Sherlock Holmes', 'ita', 4, '5 seasons');

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
    $Avengers,
    $Sherlock
];

// var_dump($movies);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Movie list</title>
    <style>
        body {
            text-align: center;
            margin: 0 auto;
            padding: 100px;
        }
    </style>
</head>

<body>
    <div>
        <table class="table table-bordered table-dark  table-hover">
            <thead>
                <tr>
                    <th>Film/Series</th>
                    <th>Language</th>
                    <th>Rating</th>
                    <th>Duration</th>
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
                                echo $film->getDuration();
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