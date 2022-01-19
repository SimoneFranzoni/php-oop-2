<?php

class CreditCard {

  private $iban;

  function __construct($_iban)
  {
    $this->iban = $_iban;
  }

  public function setIban($_iban){
    $this->iban = $_iban;
  }

  public function getIban(){
    return $this->iban;
  }
}