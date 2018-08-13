<?php

namespace BTJ\Scrapper\Container;

/**
 * Interface EventContainerInterface.
 *
 * @package BTJ\Scrapper\Container
 */
interface EventContainerInterface {

  /**
   * Set container lead field.
   *
   * @param string $lead
   *   Lead.
   *
   * @return EventContainer
   *   Event cointainer object.
   */
  public function setLead($lead) : EventContainer;

  /**
   * Get container lead.
   *
   * @return string
   *   Lead.
   */
  public function getLead() : string;

  /**
   * Set container list image path.
   *
   * @param string $image
   *   List image path.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setListImage($image) : EventContainer;

  /**
   * Get container list image path.
   *
   * @return string
   *   List image path.
   */
  public function getListImage() : string;

  /**
   * Set container title image path.
   *
   * @param string $image
   *   Title image path.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setTitleImage($image) : EventContainer;

  /**
   * Get container title image path.
   *
   * @return string
   *   Title image path.
   */
  public function getTitleImage() : string;

  /**
   * Set container category.
   *
   * @param string $category
   *   Category.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setCategory($category) : EventContainer;

  /**
   * Get container category name.
   *
   * @return string
   *   Category.
   */
  public function getCategory() : string;

  /**
   * Set container date.
   *
   * @param string $date
   *   Date.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setDate($date) : EventContainer;

  /**
   * Get container date.
   *
   * @return string
   *   Date.
   */
  public function getDate() : string;

  /**
   * Set container month.
   *
   * @param string $month
   *   Month.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setMonth($month) : EventContainer;

  /**
   * Get container month.
   *
   * @return string
   *   Month.
   */
  public function getMonth() : string;

  /**
   * Set container time.
   *
   * @param string $time
   *   Time.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setTime($time) : EventContainer;

  /**
   * Get container time.
   *
   * @return string
   *   Time.
   */
  public function getTime() : string;

  /**
   * Set container library name.
   *
   * @param string $library
   *   Library name.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setLibrary($library) : EventContainer;

  /**
   * Get container library name.
   *
   * @return string
   *   Library.
   */
  public function getLibrary() : string;

  /**
   * Set container price.
   *
   * @param string $price
   *   Price.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setPrice($price) : EventContainer;

  /**
   * Get container price.
   *
   * @return int
   *   Price, 0 - if it is free.
   */
  public function getPrice() : int;

  /**
   * Set container target/audience.
   *
   * @param array $target
   *   Target categories.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setTarget($target) : EventContainer;

  /**
   * Get container target audience.
   *
   * @return array
   *   Collection of target elements.
   */
  public function getTarget() : array;

  /**
   * Set container tags.
   *
   * @param array $tags
   *   Tags.
   *
   * @return \BTJ\Scrapper\Container\EventContainer
   *   Event container object.
   */
  public function setTags($tags) : EventContainer;

  /**
   * Get container tags.
   *
   * @return array
   *   Collection of tags.
   */
  public function getTags() : array;

}
