<?php

class Movie
{
  public $title;
  public $director;
  public $releaseYear;
  public $genre;
  private $rating;

  public function __construct($_title, $_director, $_releaseYear, $_genre)
  {
    $this->title = $_title;
    $this->director = $_director;
    $this->releaseYear = $_releaseYear;
    $this->genre = $_genre;
  }

  public function getRating()
  {
    return $this->rating;
  }

  public function setRating($_rating)
  {
    if ($_rating < 1 || $_rating > 5) {
      echo "The rating must be a value between 1 and 5";
    }
  }
}

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

  $myFirstMovie = new Movie("La vita è Bella", "Roberto Benigni", 1997, "Commedia, Drammatico");
  var_dump($myFirstMovie);
  $mySecondtMovie = new Movie("Inception", "Christopher Nolan", 2010, "Sci-Fi");
  var_dump($mySecondtMovie);

  ?>

</body>

</html>