<?php
include_once __DIR__ . '/models/Production.php';

// Qui andrò a creare i due oggetti, istanze della classe production.

$film_1 = new Production('Il Signore degli Anelli', 'Italiano', 10, new Genre('Azione','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$film_2 = new Production('Lo Hobbit', 'Inglese', 9, new Genre('Azione','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$film_3 = new Production('L\'onore dei ladri', 'Marziano', 8, new Genre('Azione, Fantasy','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));



$film_4 = new Production('Il film che non esiste', 'Nessuna', 1, new Genre('Vuoto','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$film_5 = new Production('Un film a caso', 'Corta', 4, new Genre('Casuale','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$film_6 = new Production('Il programmatore', 'JavaScript', 7, new Genre('Realismo, Documentario','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$film_7 = new Production('Il sesto Film', 'Elfico', 6, new Genre('Horror, Comico','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$film_8 = new Production('Un film brutto', 'Incomprensibile', 2, new Genre('Aaaaa','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));
list($result, $message) = $film_8->setVote(1);

$films = 
[
    $film_1,
    $film_2,
    $film_3,
    $film_4,
    $film_5,
    $film_6,
    $film_7,
    $film_8
];

return $films;