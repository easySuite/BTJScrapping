<?php
namespace BTJ\Scrapper\Crawler;

class NewsCrawler extends Crawler {
  public function getNode($url) {
    return $this->service->NewsScrap($url);
  }
}
