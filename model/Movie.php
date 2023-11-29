<?php

require_once __DIR__ . './Production.php';

class Movie extends Production
{
    private $profit;
    private $duration;

    function __construct($_title, $_language, $_rating, $_duraction, $_profit)
    {

        parent::__construct($_title, $_language, $_rating);
        // $this->profit = $_profit;
        $this->setProfit($_profit);
        // $this->duration = $_duraction;
        $this->setDuration($_duraction);
    }

    public function setProfit($profit)
    {
        if (is_string($profit)) {
            $this->profit = $profit;
        } else {
            $this->profit = null;
        }
    }

    public function setDuration($duration)
    {
        if (is_string($duration)) {
            $this->duration = $duration;
        } else {
            $this->duration = null;
        }
    }

    public function getProfit()
    {
        return $this->profit;
    }

    public function getDuration()
    {
        return $this->duration;
    }
}
