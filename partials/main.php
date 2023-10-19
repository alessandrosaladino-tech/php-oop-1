<main>

    <h1 class="text-center mb-5 mt-5">OOP MOVIES</h1>

    <div class="container d-flex flex-wrap gap-3 mb-5">

        <?php foreach ($movies as $movie) : ?>

            <div class="col">

                <div class="card mb-3 mt-3 overflow-auto" style="height: 350px; width:350px" >

                    <div class="card-body gap-2">
                        <h2 class="text-center pb-2">Titolo <?= $movie->title ?></h2>
                        <p>Anno di uscita: <?= $movie->year ?></p>
                        <p>Lingua: <?= $movie->language ?></p>
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

