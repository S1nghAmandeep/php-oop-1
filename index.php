<?php


class Production
{
    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating)
    {
        $this->title = $_title;
        $this->language = $_language;
        // $this->rating = $_rating;
        $this->setRating($_rating);
    }

    public function setRating($rating)
    {
        if (is_numeric($rating)) {
            $this->rating = intval($rating);
        } else {
            $this->rating = null;
            var_dump('il paramentro rating non è presente');
        }
    }
}

$marvel = new Production('Thor', 'Italiano', 4);
$dc = new Production('Batman', 'Italiano', 3);
$disney = new Production('Toy Story', 'Italinao', 5);

// var_dump($marvel, $dc);

$movies = [
    $marvel,
    $dc,
    $disney
];

// var_dump($movies);

?>

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
                    <td><?php echo $film->rating ?></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>