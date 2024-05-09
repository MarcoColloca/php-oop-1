<?php

$movies = require_once __DIR__ . '/db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div id="app">

        <?php include __DIR__ . '/components/header.php'; ?>


        <main>
            <section class="films-section py-5">
                <?php if ($result === false): ?>

                    <h1><?= $message ?></h1>
                <?php endif; ?>
                <div class="container">
                    <div class="row g-5">
                        <?php foreach ($movies as $film) {
                            ?>
                            <div class="col-3">
                                <div class="card px-2 py-5 text-bg-dark">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-crimson"><?php echo $film->title ?> </h5>
                                        <p class="card-text py-4">Lingua:<?php echo $film->language ?> </p>
                                        <p class="card-text">Voto: <?php echo $film->vote ?></p>
                                        <p class="card-text">Genere: <?php echo $film->genre->name ?></p>
                                        <p class="card-text">Descrizione:</p>
                                        <p class="card-subtitle"><?php echo $film->genre->description ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } ?>
                    </div>
                </div>
            </section>
        </main>
                        
        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>

    <script src="./js/app.js"></script>
</body>

</html>