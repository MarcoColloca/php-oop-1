<?php

class Production
{
    public $title;
    public $language;
    public $vote; // dovrà essere in scala da 1 a 10


    /** Costruttore della classe Production */ 
    function __construct(string $_title, string $_language, int $_vote)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setVote($_vote);
    }


    /** Metodi della Classe Production  */ 


    /* Funzione che dato un parametro (che sia un intero) va a modificare la variabile $vote, ma solo se il valore passato è un numero da 1 a 10*/
    public function setVote(int $vote)
    {
        if(is_numeric($vote) && $vote > 0 && $vote < 11){
            $this->vote = intval($vote);
        }else{
            
            var_dump("Attento $vote non è un parametro consentito. Devi utilizzare un numero da 1 a 10.");
        }
    }
}




// Qui andrò a creare i due oggetti, istanze della classe production.

$film_il_signore_degli_anelli = new Production('Il Signore degli Anelli', 'Italiano', 10);

var_dump($film_il_signore_degli_anelli);


$film_lo_hobbit = new Production('Lo Hobbit', 'Inglese', 9);

var_dump($film_lo_hobbit);

$film_onore_dei_ladri = new Production('L\'onore dei ladri', 'Marziano', 8);

var_dump($film_onore_dei_ladri);