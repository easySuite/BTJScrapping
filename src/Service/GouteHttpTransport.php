<?php

use Goutte\Client;

class GouteHttpTransport implements HttpTransportInterface
{
    private $transport = null;

    public function request($method, $url)
    {
        return $this->getTransport()->request($method, $url);
    }

    private function getTransport()
    {
        if (null == $this->transport) {
            $this->transport = new Client();
        }

        return $this->transport;
    }

}
