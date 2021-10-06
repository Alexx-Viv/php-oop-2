<?php

class User{
  protected $name;
  protected $surname;
  protected $age;
  protected $adress;

  public function __construct($_name, $_surname, $_age, $_adress)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;
    $this->adress = $_adress;
  }

}









?>