<?php

require_once __DIR__ . './Production.php';

class Movie extends Production
{
    private $profit;
    private $duraction;

    function __construct($_title, $_language, $_rating, $_duraction, $_profit)
    {

        parent::__construct($_title, $_language, $_rating);
        // $this->profit = $_profit;
        $this->setProfit($_profit);
        // $this->duraction = $_duraction;
        $this->setDuraction($_duraction);
    }

    public function setProfit($profit)
    {
        if (is_string($profit)) {
            $this->profit = $profit;
        } else {
            $this->profit = null;
        }
    }

    public function setDuraction($duraction)
    {
        if (is_string($duraction)) {
            $this->duraction = $duraction;
        } else {
            $this->duraction = null;
        }
    }

    public function getProfit()
    {
        return $this->profit;
    }

    public function getDuraction()
    {
        return $this->duraction;
    }
}
