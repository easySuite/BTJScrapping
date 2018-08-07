<?php

namespace BTJ\Scrapper\Container;


class LibraryContainer extends Container {
  private $title;

  private $lead;

  private $body;

  private $TitleImage;


  public function setTitle($title) {
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setLead($lead) {
    $this->lead = $lead;
  }

  public function getLead() {
    return $this->lead;
  }

  public function setBody($body) {
    $this->body = $body;
  }

  public function getBody() {
    return $this->body;
  }

  public function setTitleImage($image) {
    $this->TitleImage = $image;
  }

  public function getTitleImage() {
    return $this->TitleImage;
  }
}
