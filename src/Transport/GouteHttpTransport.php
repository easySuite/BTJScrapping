<?php

namespace BTJ\Scrapper\Transport;

use Goutte\Client;

/**
 * Class GouteHttpTransport.
 *
 * @package BTJ\Scrapper\Transport
 */
class GouteHttpTransport implements HttpTransportInterface {
  private $transport = NULL;

  /**
   * @inheritdoc
   */
  public function request($method, $url) {
    return $this->getTransport()->request($method, $url);
  }

  /**
   * Get transport client.
   *
   * @return Client|null
   *   Transport client.
   */
  private function getTransport() {
    if ($this->transport === NULL) {
      $this->transport = new Client();
    }

    return $this->transport;
  }

}
