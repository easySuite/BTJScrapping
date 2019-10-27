<?php

namespace BTJ\Scrapper\Container;

/**
 * Class Container.
 *
 * @package BTJ\Scrapper\Container
 */
abstract class Container
{

    private $title = '';

    private $body = '';

    private $url = '';

    /**
     * Set container title.
     *
     * @param string $title
     *   Container title.
     *
     * @return \BTJ\Scrapper\Container\Container
     *   Container object.
     */
    public function setTitle($title): Container
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get container title string.
     *
     * @return string
     *   Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

  /**
   * Set container body.
   *
   * @param string $body
   *   Container body.
   *
   * @return \BTJ\Scrapper\Container\Container
   *   Container object.
   */
    public function setBody($body): Container
    {
        $domain = $this->getDomain();
        $this->body = preg_replace('/src="(\/[^"]*)"/', 'src="' . $domain . '$1"', $body);

        return $this;
    }

    /**
     * Get container body.
     *
     * @return string
     *   Body.
     */
    public function getBody(): string
    {
        return $this->body;
    }

  /**
   * Set container url.
   *
   * @param string $url
   *   Container url.
   *
   * @return \BTJ\Scrapper\Container\Container
   *   Container object.
   */
    public function setURL($url): Container
    {
        $this->url = $url;

        return $this;
    }

  /**
   * Get container url.
   *
   * @return string
   *   Body.
   */
    public function getURL(): string
    {
        return $this->url;
    }

    public function getDomain():?string {
      $url = parse_url($this->url);
      $domain = "{$url['scheme']}://{$url['host']}";

      return $domain;
    }
}
