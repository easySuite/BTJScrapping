<?php

namespace BTJ\Scrapper\Container;

/**
 * Class NewsContainer.
 *
 * @package BTJ\Scrapper\Container
 */
class NewsContainer extends Container implements NewsContainerInterface {

  private $lead = '';

  private $listImage = '';

  private $titleImage = '';

  private $category = '';

  private $library;

  private $target;

  private $tags = [];

  /**
   * @inheritdoc
   */
  public function setLead($lead) : NewsContainer {
    $this->lead = $lead;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getLead() : string {
    return $this->lead;
  }

  /**
   * @inheritdoc
   */
  public function setListImage($image) : NewsContainer {
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
  public function setTitleImage($image) : NewsContainer {
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
  public function setCategory($category) : NewsContainer {

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
  public function setLibrary($library) : NewsContainer {
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
  public function setTarget($target) : NewsContainer {
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
  public function setTags($tags) : NewsContainer {
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
