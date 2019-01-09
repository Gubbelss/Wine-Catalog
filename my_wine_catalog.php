<?php

class my_wine_catalog{

  public $weingut;
  public $winzer;
  public $region;
  public $jahrgang;
  public $volume;
  public $quantity;
  public $self_score;
  public $critic_score;
  public $price_perbottle;
  public $price_total;
  public $currency;

  function __construct($weingut, $winzer, $region, $jahrgang, $volume, $quantity, $self_score, $critic_score, $price_perbottle, $price_total, $currency) {
    $this->weingut = $weingut;
    $this->winzer = $winzer;
    $this->region = $region;
    $this->jahrgang = $jahrgang;
    $this->volume = $volume;
    $this->quantity = $quantity;
    $this->self_score = $self_score;
    $this->critic_score = $critic_score;
    $this->price_perbottle = $price_perbottle;
    $this->price_total = $price_total;
    $this->currency = $currency;


  }




}








 ?>
