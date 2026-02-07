<?php

require_once __DIR__ . "/Traits/Priceable.php";
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Genre.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EX - PHP Classe Movie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <h1>PHP Classe Movie</h1>

  <?php

  $commedy = new Genre("Commedia", "Film leggeri e umoristici volti a intrattenere e far ridere il pubblico.");
  $drama = new Genre("Drammatico", "Narrazioni focalizzate sullo sviluppo dei personaggi e su temi emotivi profondi.");
  $scifi = new Genre("Sci-Fi", "Storie basate su concetti scientifici speculativi, futuro e tecnologia avanzata.");

  $myFirstMovie = new Movie("La vita è Bella", "Roberto Benigni", 1997, [$drama, $commedy]);
  var_dump($myFirstMovie);
  $mySecondMovie = new Movie("Inception", "Christopher Nolan", 2010, [$scifi]);
  var_dump($mySecondMovie);

  ?>

</body>

</html>