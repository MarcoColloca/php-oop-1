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

$film_1 = new Production('Il Signore degli Anelli', 'Italiano', 10);


$film_2 = new Production('Lo Hobbit', 'Inglese', 9);


$film_3 = new Production('L\'onore dei ladri', 'Marziano', 8);



$film_4 = new Production('Il film che non esiste', 'Nessuna', 1);


$film_5 = new Production('Un film a caso', 'Corta', 4);


$film_6 = new Production('Il programmatore', 'JavaScript', 7);


$film_7 = new Production('Il sesto Film', 'Elfico', 6);


$film_8 = new Production('Un film brutto', 'Incomprensibile', 1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
<div id="app">

    <?php include __DIR__ . '/components/header.php'; ?>
    

    <main>
        <section class="films-section py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-3">
                        <div class="card px-2 py-5 text-bg-dark">
                            <div class="card-body">
                                <h5 class="card-title text-center text-crimson"><?php echo $film_1->title ?></h5>
                                <p class="card-text py-4">Lingua: <?php echo $film_1->language ?></p>
                                <p class="card-text">Voto: <?php echo $film_1->vote ?></p>
                            </div>
                        </div>                       
                    </div>
                    
                    <div class="col-3">
                        <div class="card px-2 py-5 text-bg-dark">
                            <div class="card-body">
                                <h5 class="card-title text-center text-crimson"><?php echo $film_2->title ?></h5>
                                <p class="card-text py-4">Lingua: <?php echo $film_2->language ?></p>
                                <p class="card-text">Voto: <?php echo $film_2->vote ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-3">                        
                        <div class="card px-2 py-5 text-bg-dark">
                            <div class="card-body">
                                <h5 class="card-title text-center text-crimson"><?php echo $film_3->title ?></h5>
                                <p class="card-text py-4">Lingua: <?php echo $film_3->language ?></p>
                                <p class="card-text">Voto: <?php echo $film_3->vote ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card px-2 py-5 text-bg-dark">
                            <div class="card-body">
                                <h5 class="card-title text-center text-crimson"><?php echo $film_4->title ?></h5>
                                <p class="card-text py-4">Lingua: <?php echo $film_4->language ?></p>
                                <p class="card-text">Voto: <?php echo $film_4->vote ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card px-2 py-5 text-bg-dark">
                            <div class="card-body">
                                <h5 class="card-title text-center text-crimson"><?php echo $film_5->title ?></h5>
                                <p class="card-text py-4">Lingua: <?php echo $film_5->language ?></p>
                                <p class="card-text">Voto: <?php echo $film_5->vote ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card px-2 py-5 text-bg-dark">
                            <div class="card-body">
                                <h5 class="card-title text-center text-crimson"><?php echo $film_6->title ?></h5>
                                <p class="card-text py-4">Lingua: <?php echo $film_6->language ?></p>
                                <p class="card-text">Voto: <?php echo $film_6->vote ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card px-2 py-5 text-bg-dark">
                            <div class="card-body">
                                <h5 class="card-title text-center text-crimson"><?php echo $film_7->title ?></h5>
                                <p class="card-text py-4">Lingua: <?php echo $film_7->language ?></p>
                                <p class="card-text">Voto: <?php echo $film_7->vote ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card px-2 py-5 text-bg-dark">
                            <div class="card-body">
                                <h5 class="card-title text-center text-crimson"><?php echo $film_8->title ?></h5>
                                <p class="card-text py-4">Lingua: <?php echo $film_8->language ?></p>
                                <p class="card-text">Voto: <?php echo $film_8->vote ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/components/footer.php'; ?>
</div>

 <script src="./js/app.js"></script>
</body>
</html>