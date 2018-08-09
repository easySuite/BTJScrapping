<?php

namespace BTJ\Scrapper\Container;


abstract class Container {
  private $title;

  private $body;

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
