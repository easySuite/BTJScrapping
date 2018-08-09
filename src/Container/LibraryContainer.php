<?php

namespace BTJ\Scrapper\Container;

/**
 * Class LibraryContainer.
 *
 * @package BTJ\Scrapper\Container
 */
class LibraryContainer extends Container implements LibraryContainerInterface {

  private $lead;

  private $titleImage;

  /**
   * @inheritdoc
   */
  public function setLead($lead) : LibraryContainer {
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
  public function setTitleImage($image) : LibraryContainer {
    $this->titleImage = $image;

    return $this;
  }

  /**
   * @inheritdoc
   */
  public function getTitleImage() : string {
    return $this->titleImage;
  }

}
