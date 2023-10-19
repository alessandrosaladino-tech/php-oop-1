<?php
//creo nuove istanze per i film
$movies = [
    new movie("The Lord Of The Rings", "2002", "Inglese", "Fantasy"),
    new movie("Star Wars","1999","Inglese", "Action"),
    new movie("Avatar", "2009", "Inglese", "Fantasy"),
    new movie("IT", "2017", "Inglese", "Horror"),
    new movie("Natale in India", "2003", "Italiano", "Commedia"),
    new movie("Murder Mystery", "2019", "Inglese", "Commedia" ),
];

//aggiungo un generre all'istanza  (partendo da 0)
$movies[5]->addGenres("Suspance");
$movies[5]->addGenres("Action");
$movies[3]->addGenres("Suspance");
$movies[1]->addGenres("Fantasy");
$movies[0]->addGenres("Action");
$movies[0]->addGenres("Adventure");
$movies[2]->addGenres("Action");
$movies[2]->addGenres("Adventure");

