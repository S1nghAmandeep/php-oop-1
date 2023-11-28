<?php


class Production
{
    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating)
    {
        // $this->title = $_title;
        $this->setTitle($_title);
        // $this->language = $_language;
        $this->setLanguage($_language);
        // $this->rating = $_rating;
        $this->setRating($_rating);
    }

    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->title = $title;
        } else {
            $this->$title = null;
        }
    }

    public function setLanguage($language)
    {
        if (is_string($language)) {
            $this->language = $language;
        }
    }

    public function setRating($rating)
    {
        if (is_numeric($rating)) {
            $this->rating = intval($rating);
        } else {
            $this->rating = 'null';
        }
    }
}

$marvel = new Production('Thor', 'Italiano', 4);
$dc = new Production('Batman', 'Italiano', 3);
$disney = new Production('Toy Story', 'Italinao', 5);

// var_dump($marvel, $dc, $disney);

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