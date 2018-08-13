<?php

namespace BTJ\Scrapper;

use BTJ\Scrapper\Container\Container;
use BTJ\Scrapper\Container\EventContainerInterface;
use BTJ\Scrapper\Container\NewsContainerInterface;
use BTJ\Scrapper\Container\LibraryContainerInterface;
use BTJ\Scrapper\Service\ScrapperService;

/**
 * Class Crawler.
 *
 * @package BTJ\Scrapper
 */
class Crawler {

  protected $service;

  /**
   * Crawler constructor.
   *
   * @param ScrapperService $service
   *   Service CMS type used to scrap content.
   */
  public function __construct(ScrapperService $service) {
    $this->service = $service;
  }

  /**
   * Get node from the external page given by its url.
   *
   * @param string $url
   *   Node url on the external page.
   * @param Container $container
   *   Container object.
   *
   * @return mixed
   *   Container or NULL if no container is implemented.
   */
  public function getNode($url, Container $container) {
    if ($container instanceof EventContainerInterface) {
      $this->service->eventScrap($url, $container);
    }
    elseif ($container instanceof NewsContainerInterface) {
      $this->service->newsScrap($url, $container);
    }
    elseif ($container instanceof LibraryContainerInterface) {
      $this->service->libraryScrap($url, $container);
    }
  }

  public function getCTLinks($url, Container $container) : array {
    $links = [];

    if ($container instanceof EventContainerInterface) {
      $links = $this->service->getEventsUrl($url);
    }
//    elseif ($container instanceof NewsContainerInterface) {
//      $this->service->newsScrap($url, $container);
//    }
//    elseif ($container instanceof LibraryContainerInterface) {
//      $this->service->libraryScrap($url, $container);
//    }

    return $links;
  }

}
