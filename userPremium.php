<?php

require_once __DIR__ . '/user.php';

class UserPremium extends User{

  function __construct($_firstname, $_lastname)
  {
    
    parent::__construct($_firstname, $_lastname);
    $this->discount = 15;
    
  }
}