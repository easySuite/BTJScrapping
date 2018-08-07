<?php

namespace BTJ\Scrapper\Container;


class NewsContainer extends Container {
  private $title;

  private $lead;

  private $body;

  private $ListImage;

  private $TitleImage;

  private $category;

  private $library;

  private $target;

  private $tags;

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

  public function setListImage($image) {
    $this->ListImage = $image;
  }

  public function getListImage() {
    return $this->ListImage;
  }

  public function setTitleImage($image) {
    $this->TitleImage = $image;
  }

  public function getTitleImage() {
    return $this->TitleImage;
  }

  public function setCategory($category) {
    $this->category = $category;
  }

  public function getCategory() {
    return $this->category;
  }

  public function getTime() {
    return $this->time;
  }

  public function setLibrary($library) {
    $this->library = $library;
  }

  public function getLibrary() {
    return $this->library;
  }

  public function setTarget($target) {
    $this->target = $target;
  }

  public function getTarget() {
    return $this->target;
  }

  public function setTags($tags) {
    $this->tags = $tags;
  }

  public function getTags() {
    return $this->tags;
  }
}
