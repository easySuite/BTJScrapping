<?php
namespace BTJ\Scrapper\Crawler;

class EventCrawler extends Crawler {
  public function getNode($url) {
    return $this->service->EventScrap($url);
  }
}
