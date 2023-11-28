<?php


class Production
{
    public $title;
    public $language;
    public $rating;

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

    public function getTitle()
    {
        return $this->title;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getRating()
    {
        return $this->rating;
    }

    function __construct($_title, $_language, $_rating)
    {
        // $this->title = $_title;
        $this->setTitle($_title);
        // $this->language = $_language;
        $this->setLanguage($_language);
        // $this->rating = $_rating;
        $this->setRating($_rating);
    }
}

$marvel = new Production('Thor', 'Italiano', 4);
$dc = new Production('Batman', 'Italiano', 3);
$disney = new Production('Toy Story', 'Italiano', 5);

// var_dump($marvel, $dc, $disney);

$movies = [
    $marvel,
    $dc,
    $disney
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