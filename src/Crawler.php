<?php
namespace BTJ\Scrapper;

use BTJ\Scrapper\Service\ScrapperService;

class Crawler {
  protected $service;

  public function __construct(ScrapperService $service) {
      $this->service = $service;
  }

  function getNode($url) {
    $container = $this->service->getContainer();
    $namespace = "BTJ\Scrapper\Container";

    $node = NULL;
    if (is_a($container, $namespace . '\EventContainer')) {
      $node = $this->service->EventScrap($url);
    }
    elseif (is_a($container, $namespace . '\NewsContainer')) {
      $node = $this->service->NewsScrap($url);
    }
    elseif (is_a($container, $namespace . '\LibraryContainer')) {
      $node = $this->service->LibraryScrap($url);
    }

    return $node;
  }
}
