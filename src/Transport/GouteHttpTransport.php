<?php

namespace BTJ\Scrapper\Transport;

use Goutte\Client;

class GouteHttpTransport implements HttpTransportInterface {
  private $transport = NULL;

  public function request($method, $url) {
    return $this->getTransport()->request($method, $url);
  }

  private function getTransport() {
    if ($this->transport === NULL) {
        $this->transport = new Client();
    }

    return $this->transport;
  }
}
