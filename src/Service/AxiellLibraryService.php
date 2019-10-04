<?php

namespace BTJ\Scrapper\Service;

use BTJ\Scrapper\Container\EventContainerInterface;
use BTJ\Scrapper\Container\LibraryContainerInterface;
use BTJ\Scrapper\Container\NewsContainerInterface;
use BTJ\Scrapper\Exception\BTJException;
use BTJ\Scrapper\Transport\HttpTransportInterface;
use Goutte\Client;
use BTJ\Scrapper\Container;

/**
 * Class AxiellLibraryService.
 */
class AxiellLibraryService extends ScrapperService implements ConfigurableServiceInterface
{

  use ConfigurableServiceTrait;

  public function __construct(HttpTransportInterface $transport) {
    $this->identifier = 'axiell';

    parent::__construct($transport);
  }

  /**
   * {@inheritdoc}
   */
  public function getEventsLinks($url): array {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibrariesLinks($url): array {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getNewsLinks($url): array {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function eventScrap(
    string $url,
    EventContainerInterface $container
  ): void {

  }

  /**
   * {@inheritdoc}
   */
    public function newsScrap(
      string $url,
      NewsContainerInterface $container
    ): void {
      // TODO: Implement newsScrap() method.
    }

  /**
   * {@inheritdoc}
   */
  public function libraryScrap(
    string $url,
    LibraryContainerInterface $container
  ): void {
    // TODO: Implement libraryScrap() method.
  }
}
