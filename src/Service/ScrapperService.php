<?php

namespace BTJ\Scrapper\Service;

abstract class ScrapperService {
  abstract function EventScrap($url);

  abstract function NewsScrap($news);

  abstract function LibraryScrap($library);
}
