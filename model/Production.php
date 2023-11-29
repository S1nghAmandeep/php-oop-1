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
            $this->title = null;
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
}
