<?php

namespace BTJ\Scrapper\Service;

use BTJ\Scrapper\Container\EventContainerInterface;
use BTJ\Scrapper\Container\LibraryContainerInterface;
use BTJ\Scrapper\Container\NewsContainerInterface;
use BTJ\Scrapper\Transport\HttpTransportInterface;

/**
 * Class ScrapperService.
 *
 * @package BTJ\Scrapper\Service
 */
abstract class ScrapperService
{
    private $transport;

    protected $identifier;

  /**
   * Gets the service identifier.
   *
   * @return string
   */
    public function getIdentifier(): string {
      return $this->identifier;
    }

    /**
     * Parse event page.
     *
     * @param string $url
     *   Url to get event from.
     * @param EventContainerInterface $container
     *   Container to save event in.
     *
     * @return EventContainer
     *   Event object.
     */
    abstract public function eventScrap(string $url, EventContainerInterface $container) : void;

    abstract public function getEventsLinks($url) : array;

    abstract public function getLibrariesLinks($url) : array;

    abstract public function getNewsLinks($url) : array;

    /**
     * Parse news page.
     *
     * @param string $url
     *   Url to get news from.
     * @param NewsContainerInterface $container
     *   Container to save news in.
     *
     * @return NewsContainer
     *   News object.
     */
    abstract public function newsScrap(string $url, NewsContainerInterface $container) : void;

    /**
     * Parse library page.
     *
     * @param string $url
     *   Url to get library from.
     * @param LibraryContainerInterface $container
     *   Container to save library in.
     *
     * @return LibraryContainer
     *   Library object.
     */
    abstract public function libraryScrap(string $url, LibraryContainerInterface $container) : void;

    /**
     * ScrapperService constructor.
     *
     * @param \BTJ\Scrapper\Transport\HttpTransportInterface $transport
     *   Transport object.
     */
    public function __construct(HttpTransportInterface $transport)
    {
        $this->transport = $transport;
    }

    /**
     * Get service scraping transport.
     *
     * @return HttpTransportInterface
     *   Service transpoprt object.
     */
    public function getTransport()
    {
        return $this->transport;
    }
}
