<?php
namespace BTJ\Scrapper\Crawler;

class LibraryCrawler extends Crawler {
  public function getNode($url) {
    return $this->service->LibraryScrap($url);
  }
}
