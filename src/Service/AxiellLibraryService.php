<?php

namespace BTJ\Scrapper\Service;

use Goutte\Client;
use BTJ\Scrapper\Container;

class AxiellLibraryService extends ScrapperService {
  public function EventScrap($url) {
    $container = new Container\EventContainer();
    $container->setTitle('Axiel library title');
    return $container;

    $client = new Client();
    $event = $client->request('GET', $url . $href);
  }

  public function NewsScrap($news) {
    // TODO: Implement NewsScrap() method.

    // Complex DOM parsing

    // Get $title from DOM
    // $this->crawler->setTitle($title);

    // Get $body from DOM
    // $this->crawler->setBody($body);
  }

  public function LibraryScrap($library) {
    // TODO: Implement LibraryScrap() method.

    // Complex DOM parsing

    // Get $title from DOM
    // $this->crawler->setTitle($title);

    // Get $body from DOM
    // $this->crawler->setBody($body);
  }
}
