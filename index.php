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

$marvel = new Production('Thor', 'italiano', 4);
$dc = new Production('Batman', 'italiano', 3);

var_dump($marvel, $dc);
