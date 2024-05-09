<?php
$films = require_once __DIR__ . '/db.php';


// comunico che l'output è di tipo json 
header('Content-type: application/json');


// specifico quiale sarà la risposta che verrà visualizzata
$response = [
  'results' => $films,
  'success' => true
];

// richiamo il file trasformandolo in formato json 
echo json_encode($response);

