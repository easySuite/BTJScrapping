<?php

namespace BTJ\Scrapper\Container;


class EventContainer extends Container {
  private $title;

  private $body;

  private $ListImage;

  private $TitleImage;

  private $category;

  private $date;

  private $month;

  private $time;

  private $library;

  private $price;

  private $target;

  private $tags;

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

  public function setDate($date) {
    $this->date = $date;
  }

  public function getDate() {
    return $this->date;
  }

  public function setMonth($month) {
    $this->month = $month;
  }

  public function getMonth() {
    return $this->month;
  }

  public function setTime($time) {
    $this->time = $time;
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

  public function setPrice($price) {
    $this->price = $price;
  }

  public function getPrice(){
    return $this->price;
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
