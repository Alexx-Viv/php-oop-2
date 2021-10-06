<?php

class Product{
  private $name;
  private $price;

  public function __construct($_name, $_price)
  {
    $this->name = $_name;
    $this->price = $_price;
  }
}

?>