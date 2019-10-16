<?php

namespace BTJ\Scrapper\Service;

use BTJ\Scrapper\Container\EventContainerInterface;
use BTJ\Scrapper\Container\LibraryContainerInterface;
use BTJ\Scrapper\Container\NewsContainerInterface;
use BTJ\Scrapper\Exception\BTJException;
use BTJ\Scrapper\Transport\HttpTransportInterface;
use Goutte\Client;
use BTJ\Scrapper\Container;
use Symfony\Component\BrowserKit\CookieJar;

/**
 * Class AxiellLibraryService.
 */
class AxiellLibraryService extends ScrapperService implements ConfigurableServiceInterface
{

  use ConfigurableServiceTrait;

  /**
   * AxiellLibraryService constructor.
   *
   * @param \BTJ\Scrapper\Transport\HttpTransportInterface $transport
   *   HTTP request transport.
   */
  public function __construct(HttpTransportInterface $transport) {
    $this->identifier = 'axiell';

    parent::__construct($transport);
  }

  /**
   * {@inheritdoc}
   */
  public function getEventsLinks($url): array {
    $url .= $this->config['events']['crawler']['uri'] ?? '';

    /** @var \Goutte\Client $client */
    $client = new Client();
    /** @var \Symfony\Component\DomCrawler\Crawler $crawler */
    $crawler = $client->request('GET', $url);

    $eventSelector = $this->config['events']['crawler']['link_selector'];
    $pagerSelector = $this->config['events']['crawler']['pager_next_selector'];

    $eventLinks = [];
    do {
      /** @var \Symfony\Component\DomCrawler\Link[] $linkCandidates */
      $linkCandidates = $crawler->filter($eventSelector)->links();
      foreach ($linkCandidates as $linkCandidate) {
        // Actually click the link to get a proper event link, since it's
        // a redirect...
        $crawler = $client->click($linkCandidate);
        // ... therefore after an event landing page is loaded
        // we can grab the actual event link...
        $eventLinks[] = $crawler->getUri();
        // ... and go back to search result.
        $crawler = $client->back();
      }

      $pagerLinks = $crawler->filter($pagerSelector);
      if ($pagerLinks->count() > 0) {
        /** @var \Symfony\Component\DomCrawler\Link $link */
        $link = $pagerLinks->first()->link();

        /** @var \Symfony\Component\BrowserKit\Cookie $sessionCookie */
        $sessionCookie = $client->getCookieJar()->get('JSESSIONID');
        $cookieJar = new CookieJar();
        $cookieJar->set($sessionCookie);
        // Reset the client and apply session cookie, otherwise it wont page
        // the results at all.
        $client = new Client([], null, $cookieJar);

        $crawler = $client->request('GET', $link->getUri());
      }
    }
    while ($pagerLinks->count() > 0);

    return $eventLinks;
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
