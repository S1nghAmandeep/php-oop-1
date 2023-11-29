<?php

require_once __DIR__ . './Production.php';

class Series extends Production
{
    private $season;

    function __construct($_title, $_language, $_rating, $_season)
    {
        parent::__construct($_title, $_language, $_rating);
        // $this->season = $_season;
        $this->setSeason($_season);
    }

    public function setSeason($season)
    {
        if (is_numeric($season)) {
            $this->season = $season;
        } else {
            $this->season = null;
        }
    }

    public function getSeason()
    {
        $this->season;
    }
}
