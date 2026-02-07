<?php

require_once __DIR__ . "/Traits/Priceable.php";
require_once __DIR__ . "/Models/Genre.php";
require_once __DIR__ . "/Models/Movie.php";

$commedy = new Genre("Commedia", "Film leggeri e umoristici volti a intrattenere e far ridere il pubblico.");
$drama = new Genre("Drammatico", "Narrazioni focalizzate sullo sviluppo dei personaggi e su temi emotivi profondi.");
$scifi = new Genre("Sci-Fi", "Storie basate su concetti scientifici speculativi, futuro e tecnologia avanzata.");


$movies = [
    new Movie("La vita è Bella", "Roberto Benigni", 1997, [$drama, $commedy], 15.50),
    new Movie("Inception", "Christopher Nolan", 2010, [$scifi], 12.99),
    new Movie("Interstellar", "Christopher Nolan", 2014, [$scifi, $drama], 14.00)
];

$movies[0]->setRating(5);
$movies[1]->setRating(4);