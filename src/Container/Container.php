<?php

namespace BTJ\Scrapper\Container;


abstract class Container {
  private $container = NULL;

  private $title;

  private $body;

  public function getContainer() {
    if ($this->container === NULL) {
      $this->container = new Client();
    }

    return $this->container;
  }

  public function setTitle($title) {
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setBody($body) {
    $this->body = $body;
  }

  public function getBody() {
    return $this->body;
  }
}
