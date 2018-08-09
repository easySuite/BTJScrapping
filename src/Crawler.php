<?php
namespace BTJ\Scrapper;

use BTJ\Scrapper\Container\Container;
use BTJ\Scrapper\Container\EventContainer;
use BTJ\Scrapper\Container\EventContainerInterface;
use BTJ\Scrapper\Exception\BTJException;
use BTJ\Scrapper\Service\ScrapperService;

class Crawler {
  protected $service;

  public function __construct(ScrapperService $service) {
      $this->service = $service;
  }

  function getNode($url, Container $container) {
//    $container = $this->service->getContainer();
//    $namespace = "BTJ\Scrapper\Container";
//
//    $node = NULL;
//    if (is_a($container, $namespace . '\EventContainer')) {
//      $node = $this->service->EventScrap($url);
//    }
//    elseif (is_a($container, $namespace . '\NewsContainer')) {
//      $node = $this->service->NewsScrap($url);
//    }
//    elseif (is_a($container, $namespace . '\LibraryContainer')) {
//      $node = $this->service->LibraryScrap($url);
//    }
      $node = null;

      if ($container instanceof EventContainerInterface) {
          $node = $this->service->EventScrap($url, $container);
      }
      else {
          // ...
      }


    return $node;
  }
}
