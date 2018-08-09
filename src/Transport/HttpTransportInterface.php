<?php

namespace BTJ\Scrapper\Transport;

/**
 * Interface HttpTransportInterface.
 *
 * @package BTJ\Scrapper\Transport
 */
interface HttpTransportInterface {

  /**
   * Request content from the page based on the HTTP method.
   *
   * @param string $method
   *   HTTP method.
   * @param string $url
   *   External url page.
   *
   * @return mixed
   *   Transport crawler.
   */
  public function request($method, $url);

}
