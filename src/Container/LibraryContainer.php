<?php

namespace BTJ\Scrapper\Container;

/**
 * Class LibraryContainer.
 *
 * @package BTJ\Scrapper\Container
 */
class LibraryContainer extends Container implements LibraryContainerInterface {

  private $lead = '';

  private $titleImage = '';

  private $email = '';

  private $phone = '';

  private $street = '';

  private $zip = '';

  private $city = '';

  private $hours = [];

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


  /**
   * {@inheritdoc}
   */
  public function setEmail($email): LibraryContainer {
    $this->email = $email;

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getEmail(): string {
    return $this->email;
  }

  /**
   * {@inheritdoc}
   */
  public function setPhone($phone): LibraryContainer {
    $this->phone = $phone;

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getPhone(): string {
    return $this->phone;
  }

  /**
   * {@inheritdoc}
   */
  public function setStreet($street): LibraryContainer {
    $this->street = $street;

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getStreet(): string {
    return $this->street;
  }

  /**
   * {@inheritdoc}
   */
  public function setZip($zip): LibraryContainer {
    $this->zip = $zip;

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getZip(): string {
    return $this->zip;
  }

  /**
   * {@inheritdoc}
   */
  public function setCity($city): LibraryContainer {
    $this->city = $city;

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCity(): string {
    return $this->city;
  }

  /**
   * {@inheritdoc}
   */
  public function setOpeningHours($hours): LibraryContainer {
    $this->hours = $hours;

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getOpeningHours(): array {
    return $this->hours;
  }
}
