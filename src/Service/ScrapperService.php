<?php

namespace BTJ\Scrapper\Service;

use BTJ\Scrapper\Container;

abstract class ScrapperService {
  private $transport;

  private $container;

  abstract function EventScrap($url);

  abstract function NewsScrap($url);

  abstract function LibraryScrap($url);

  public function __construct($transport, $container) {
    $this->transport = $transport;
    $this->container = $container;
  }

  /**
   * @return \HttpTransportInterface
   */
  public function getTransport() {
    return $this->transport;
  }

  /**
   * @return \Container;
   */
  public function getContainer() {
    return $this->container;
  }
}
