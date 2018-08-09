<?php

namespace BTJ\Scrapper\Container;

/**
 * Interface LibraryContainerInterface.
 *
 * @package BTJ\Scrapper\Container
 */
interface LibraryContainerInterface {

  /**
   * Set contaier lead field.
   *
   * @param string $lead
   *   Container lead.
   *
   * @return \BTJ\Scrapper\Container\LibraryContainer
   *   Library container object.
   */
  public function setLead($lead) : LibraryContainer;

  /**
   * Get lead.
   *
   * @return string
   *   Lead.
   */
  public function getLead() : string;

  /**
   * Set container title image path.
   *
   * @param string $image
   *   Container title image path.
   *
   * @return \BTJ\Scrapper\Container\LibraryContainer
   *   Library container object.
   */
  public function setTitleImage($image) : LibraryContainer;

  /**
   * Get title image path.
   *
   * @return string
   *   Title image path.
   */
  public function getTitleImage() : string;

}
