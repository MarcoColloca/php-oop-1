<?php
require_once __DIR__ . '/Production.php';
require_once __DIR__ . '/Genre.php';

class Movie extends Production
{   
    
    public $profitti;
    public $durata;


    function __construct(string $_title, string $_language, int $_vote, Genre $_genre, int $_profitti, int $_durata)
    {
 
        parent::__construct($_title, $_language, $_vote, $_genre);

        $this->profitti = $_profitti;
        $this->durata = $_durata;

    }

    function getProfitti(): int {
        return $this->profitti;
    }

    function getDurata(): int {
        return $this->durata;
    }

    function getAdditionalData() {
        return [
            'profitti' => $this->profitti,
            'durata' => $this->durata,
        ]; 
    }
}