<main>

<h1 class="text-center mb-5 mt-5">OOP MOVIES</h1>

    <div class="container">

        <?php foreach ($movies as $movie) : ?>
            <div class="col">

                <div class="card mb-3 mt-3">

                    <div class="card-body">
                        <h2>Titolo <?= $movie->title ?></h2>
                        <p>Anno di uscita: <?= $movie->year ?></p>
                        <p>Lingua <?= $movie->language ?></p>
                        <div>
                            <span>Genere:</span>
                            <ul>
                                <?php foreach ($movie->genres as $genre) : ?>
                                    <li><?= $genre ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        <?php endforeach ?>

    </div>


</main>

</html>