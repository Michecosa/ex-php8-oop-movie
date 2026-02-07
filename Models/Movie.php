<?php

class Movie
{
  public $title;
  public $director;
  public $releaseYear;
  public array $genre;
  private $rating;

  use Priceable;

  public function __construct($_title, $_director, $_releaseYear, array $_genre, $_price=0)
  {
    $this->title = $_title;
    $this->director = $_director;
    $this->releaseYear = $_releaseYear;
    $this->genre = $_genre;
    $this->setPrice($_price);
  }

  public function getRating()
  {
    return $this->rating;
  }

  public function setRating($_rating)
  {
    if ($_rating >= 1 && $_rating <= 5) {
      $this->rating = $_rating;
    } else {
      $this->rating = null;
    }
  }
}