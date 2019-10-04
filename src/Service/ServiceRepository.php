<?php

namespace BTJ\Scrapper\Service;

use BTJ\Scrapper\Exception\BTJException;

/**
 * Class ServiceRepository.
 */
class ServiceRepository implements ServiceRepositoryInterface {

  protected $services = [];

  /**
   * {@inheritdoc}
   */
  public function addService(ScrapperService $service): void {
    if (array_key_exists($service->getIdentifier(), $this->services)) {
      throw new BTJException('Service with identifier "' . $service->getIdentifier() . '" already registered.');
    }

    $this->services[$service->getIdentifier()] = $service;
  }

  /**
   * {@inheritdoc}
   */
  public function getService(string $identifier): ScrapperService {
    if (!array_key_exists($identifier, $this->services)) {
      throw new BTJException('Service with identifier "' . $service->getIdentifier() . '" not registered.');
    }

    return $this->services[$identifier];
  }
}

