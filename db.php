<?php
include_once __DIR__ . '/models/Production.php';
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/TVSerie.php';

// Qui andrò a creare i due oggetti, istanze della classe production.

$production_1 = new Movie('Il Signore degli Anelli', 'Italiano', 10, new Genre('Azione','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'), 5555, 999);


$production_2 = new TVSerie('Lo Hobbit', 'Inglese', 9, new Genre('Azione','Lorem ipsum dolor sit amet, consectetur adipisicing elit!',), 11);


$production_3 = new Movie('L\'onore dei ladri', 'Marziano', 8, new Genre('Azione, Fantasy','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'), 5555, 999);


$production_4 = new Movie('Il film che non esiste', 'Nessuna', 1, new Genre('Vuoto','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'), 5555, 999);


$production_5 = new Movie('Un film a caso', 'Corta', 4, new Genre('Casuale','Lorem ipsum dolor sit amet, consectetur adipisicing elit!'), 5555, 999);


$production_6 = new TVSerie('Il programmatore', 'JavaScript', 7, new Genre('Realismo, Documentario','Lorem ipsum dolor sit amet, consectetur adipisicing elit!',), 11);


$production_7 = new TVSerie('Il sesto Film', 'Elfico', 6, new Genre('Horror, Comico','Lorem ipsum dolor sit amet, consectetur adipisicing elit!',), 11);


$production_8 = new TVSerie('Un film brutto', 'Incomprensibile', 2, new Genre('Aaaaa','Lorem ipsum dolor sit amet, consectetur adipisicing elit!',), 11);
list($result, $message) = $production_8->setVote(1);

$production_9 = new TVSerie('Un film Molto Bello', 'Tutte quante', 10, new Genre('Inconcepibile', 'descrizione!!!!!!!!!',), 11);
$production_9->getVote();

$movie_1 = new Movie('Questo è un film', 'Italiano', 10, new Genre('Film Carino', 'descrizione!!!!!!!!!'), 15000, 138);

$SerieTv_1 = new TVSerie('Questa è una Serie Tv', 'Italiano', 10, new Genre('Serie Tv bella', 'descrizione!!!!!!!!!'), 24);


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
    $production_9,
    $movie_1,
    $SerieTv_1
];

return $films;