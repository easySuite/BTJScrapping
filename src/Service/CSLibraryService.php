<?php

namespace BTJ\Scrapper\Service;


use BTJ\Scrapper\Container\EventContainerInterface;
use BTJ\Scrapper\Exception\BTJException;

class CSLibraryService extends ScrapperService {

    /**
     * @param $url
     * @return \BTJ\Scrapper\Container\Container
     * @throws BTJException
     */
  public function EventScrap($url, EventContainerInterface $container) {
    $crawler = $this->getTransport()->request('GET', $url);
//    $container = $this->getContainer();
//
//    if (!$container instanceof EventContainerInterface) {
//        throw new BTJException('Only EventContainerInterface objects can be used.');
//    }

    $crawler->filter('h1.page-title')->each(function ($node) use
    ($container) {
      $container->setTitle($node->text());
    });

    $crawler->filter('.page-introduction')->each(function ($node) use ($container) {
      $container->setBody($node->text());
    });

    $crawler->filter('.editorial-image > img')->each(function ($node) use ($container) {
      $container->setListImage($node->attr('src'));
    });

    $crawler->filter('.editorial-image > .content-type')->each(function ($node) use ($container) {
      $container->setCategory($node->text());
    });

    $crawler->filter('.event-date')->each(function ($node) use ($container) {
      $container->setDate($node->text());
    });

    $crawler->filter('.event-month')->each(function ($node) use ($container) {
      $container->setMonth($node->text());
    });

    $crawler->filter('.event-when > .value')->each(function ($node) use ($container) {
      $container->setTime($node->text());
    });

    $crawler->filter('.library-name > .page-link')->each(function ($node) use ($container) {
      $container->setLibrary($node->text());
    });

    $crawler->filter('.event-cost > .value')->each(function ($node) use ($container) {
      $container->setPrice($node->text());
    });

    $targets = $crawler->filter('li.audience-value')->each(function ($node) {
      return trim(preg_replace('/\s+/', ' ', $node->text()));
    });
    $container->setTarget($targets);

    $tags = $crawler->filter('.tags li')->each(function ($node) {
      return trim(preg_replace('/\s+/', ' ', $node->text()));
    });
    $container->setTags($tags);

    return $container;
  }

  public function NewsScrap($url) {
    $crawler = $this->getTransport()->request('GET', $url);
    $container = $this->getContainer();

    $crawler->filter('h1.page-title')->each(function ($node) use ($container) {
      $container->setTitle($node->text());
    });

    $crawler->filter('.page-introduction')->each(function ($node) use ($container) {
      $container->setLead($node->text());
    });

    $crawler->filter('.content-image > img')->each(function ($node) use ($container) {
      $container->setListImage($node->attr('src'));
    });

    $crawler->filter('.image-widget > img')->each(function ($node) use ($container) {
      $container->setTitleImage($node->attr('src'));
    });

    $crawler->filter('.template .zone-1')->each(function ($node) use ($container) {
      $container->setBody($node->html());
    });

    $targets = $crawler->filter('.audiences a')->each (function ($node) {
      return trim(preg_replace('/\s+/', ' ', $node->text()));
    });
    $container->setTarget($targets);

    $tags = $crawler->filter('.tags li')->each(function ($node) {
      return trim(preg_replace('/\s+/', ' ', $node->text()));
    });
    $container->setTags($tags);

    return $container;
  }

  public function LibraryScrap($url) {
    $crawler = $this->getTransport()->request('GET', $url);
    $container = $this->getContainer();

    $crawler->filter('h1.page-title')->each(function ($node) use ($container) {
      $container->setTitle($node->text());
    });

    $crawler->filter('.content-image > img')->each(function ($node) use ($container) {
      $container->setTitleImage($node->attr('src'));
    });

    $crawler->filter('.template .zone-1')->each(function ($node) use ($container) {
      $body = '';
      $children = $node->children()->each(function ($child) {
        if ($child->nodeName() == 'script') {
          unset($child);
        }
        if ($child) {
          return $child->html();
        }
      });

      $children = array_filter($children, function ($child) {
        if (!empty($child)) {
          if (strpos($child, '<strong>') === FALSE) {
            return $child;
          }
        }
      });
      $container->setBody(implode('', $children));
    });



    return $container;
  }
}
