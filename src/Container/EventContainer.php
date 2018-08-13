<?php

namespace BTJ\Scrapper\Container;

/**
 * Class EventContainer.
 *
 * @package BTJ\Scrapper\Container
 */
class EventContainer extends Container implements EventContainerInterface {

  private $lead = '';

  private $listImage = '';

  private $titleImage = '';

  private $category = '';

  private $date = '';

  private $month = '';

  private $time = '';

  private $library = '';

  private $price = 0;

  private $target = [];

  private $tags = [];

  /**
   * @inheritdoc
   */
  public function setLead($lead): EventContainer {
    $this->lead = $lead;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getLead(): string {
    return $this->lead;
  }

  /**
   * @inheritdoc
   */
  public function setListImage($image) : EventContainer {
    $this->listImage = $image;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getListImage() : string {
    return $this->listImage;
  }

  /**
   * @inheritdoc
   */
  public function setTitleImage($image) : EventContainer {
    $this->titleImage = $image;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getTitleImage() : string {
    return $this->titleImage;
  }

  /**
   * @inheritdoc
   */
  public function setCategory($category) : EventContainer {
    $this->category = $category;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getCategory() : string {
    return $this->category;
  }

  /**
   * @inheritdoc
   */
  public function setDate($date) : EventContainer {
    $this->date = $date;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getDate() : string {
    return $this->date;
  }

  /**
   * @inheritdoc
   */
  public function setMonth($month) : EventContainer {
    $this->month = $month;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getMonth() : string {
    return $this->month;
  }

  /**
   * @inheritdoc
   */
  public function setTime($time) : EventContainer {
    $this->time = $time;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getTime() : string {
    return $this->time;
  }

  /**
   * @inheritdoc
   */
  public function setLibrary($library) : EventContainer {
    $this->library = $library;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getLibrary() : string {
    return $this->library;
  }

  /**
   * @inheritdoc
   */
  public function setPrice($price) : EventContainer {
    $this->price = $price;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getPrice() : int {
    return $this->price;
  }

  /**
   * @inheritdoc
   */
  public function setTarget($target) : EventContainer {
    $this->target = $target;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getTarget() : array {
    return $this->target;
  }

  /**
   * @inheritdoc
   */
  public function setTags($tags) : EventContainer {
    $this->tags = $tags;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getTags() : array {
    return $this->tags;
  }

}
