<?php

namespace BTJ\Scrapper\Service;

use BTJ\Scrapper\Container\Container;
use BTJ\Scrapper\Transport\HttpTransportInterface;

abstract class ScrapperService {
  private $transport;

  private $container;

  abstract function EventScrap($url);

  abstract function NewsScrap($url);

  abstract function LibraryScrap($url);

  public function __construct(HttpTransportInterface $transport, Container $container) {
    $this->transport = $transport;
    $this->container = $container;
  }

    /**
     * @return HttpTransportInterface
     */
  public function getTransport() {
    return $this->transport;
  }

    /**
     * @return Container
     */
  public function getContainer() {
    return $this->container;
  }
}
