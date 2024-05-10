<?php
require_once __DIR__ . '/Genre.php';

class Production
{
    public $title;
    public $language;
    public $vote; // dovrà essere in scala da 1 a 10

    public $genre;


    /** Costruttore della classe Production */ 
    function __construct(string $_title, string $_language, int $_vote, Genre $_genre)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setVote($_vote);
        $this->genre = $_genre;

    }


    /** Metodi della Classe Production  */ 


    /* Funzione che dato un parametro (che sia un intero) va a modificare la variabile $vote, ma solo se il valore passato è un numero da 1 a 10*/
    public function setVote(int $vote)
    {
        if(is_numeric($vote) && $vote > 0 && $vote < 11){
            $this->vote = intval($vote);
            return [true, null];
        }else{
            return [false, "Attento $vote non è un parametro consentito. Devi utilizzare un numero da 1 a 10."];
        }
    }

    function getVote(): int {
        return $this->vote;
    }

    function getProfitti(): int {
        return -1;
    }

    function getDurata(): int {
        return -1;
    }

    function getAdditionalData() {
        return [];
    }
}
