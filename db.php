<?php
include_once __DIR__ . '/models/Production.php';

// Qui andrò a creare i due oggetti, istanze della classe production.

$production_1 = new Production('Il Signore degli Anelli', 'Italiano', 10, new Genre('Azione','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$production_2 = new Production('Lo Hobbit', 'Inglese', 9, new Genre('Azione','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$production_3 = new Production('L\'onore dei ladri', 'Marziano', 8, new Genre('Azione, Fantasy','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));



$production_4 = new Production('Il film che non esiste', 'Nessuna', 1, new Genre('Vuoto','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$production_5 = new Production('Un film a caso', 'Corta', 4, new Genre('Casuale','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$production_6 = new Production('Il programmatore', 'JavaScript', 7, new Genre('Realismo, Documentario','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$production_7 = new Production('Il sesto Film', 'Elfico', 6, new Genre('Horror, Comico','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));


$production_8 = new Production('Un film brutto', 'Incomprensibile', 2, new Genre('Aaaaa','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'));
list($result, $message) = $production_8->setVote(1);

$production_9 = new Production('Un film Molto Bello', 'Tutte quante', 10, new Genre('Inconcepibile', 'descrizione!!!!!!!!!'));

$films = 
[
    $production_1,
    $production_2,
    $production_3,
    $production_4,
    $production_5,
    $production_6,
    $production_7,
    $production_8,
    $production_9
];

return $films;