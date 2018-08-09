<?php
namespace BTJ\Scrapper\Transport;

interface HttpTransportInterface {

  public function request($method, $url);
}
