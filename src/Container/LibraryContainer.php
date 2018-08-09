<?php

namespace BTJ\Scrapper\Container;


class LibraryContainer extends Container {
  private $lead;

  private $TitleImage;

  public function setLead($lead) {
    $this->lead = $lead;
  }

  public function getLead() {
    return $this->lead;
  }

  public function setTitleImage($image) {
    $this->TitleImage = $image;
  }

  public function getTitleImage() {
    return $this->TitleImage;
  }
}
