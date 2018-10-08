<?php

namespace BTJ\Scrapper\Container;

/**
 * Class Container.
 *
 * @package BTJ\Scrapper\Container
 */
abstract class Container
{

    private $title;

    private $body;

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
        $this->body = $body;

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
}
