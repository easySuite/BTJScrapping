<?php

namespace BTJ\Scrapper\Service;

abstract class ScrapperService {
    private $transport;
  abstract function EventScrap($url);

  abstract function NewsScrap($news);

  abstract function LibraryScrap($library);

  public function __construct(\HttpTransportInterface $transport)
  {
        $this->transport = $transport;
  }

    /**
     * @return \HttpTransportInterface
     */
  public function getTransport()
  {
      return $this->transport;
  }
}
