<?php

namespace BTJ\Scrapper\Transport;

use Goutte\Client;

/**
 * Class GoutteHttpTransport.
 *
 * @package BTJ\Scrapper\Transport
 */
class GoutteHttpTransport implements HttpTransportInterface
{
    private $transport = null;

    /**
     * @inheritdoc
     */
    public function request($method, $url)
    {
        return $this->getClient()->request($method, $url);
    }

   /**
    * {@inheritdoc}
    */
    public function getClient(): Client {
      if ($this->transport === null) {
        $this->transport = new Client();
      }

      return $this->transport;
    }
}
