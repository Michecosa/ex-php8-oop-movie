<?php

trait Priceable {

  private $price;

  public function setPrice($newPrice) {
    if($newPrice < 0 || $newPrice > 100) {
      echo "Inserire un prezzo valido";
      } else {
      $this->price = $newPrice;
    }
  }
}
