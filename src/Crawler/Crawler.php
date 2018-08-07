<?php
namespace BTJ\Scrapper\Crawler;

abstract class Crawler {
  protected $service;

  public function __construct($service) {
    $this->service = $service;
  }

  abstract function getNode($url);
}
