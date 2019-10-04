<?php

namespace BTJ\Scrapper\Service;

/**
 * Interface ServiceFactoryInterface.
 */
interface ServiceRepositoryInterface {

  /**
   * Store a service instance.
   *
   * @param \BTJ\Scrapper\Service\ScrapperService $service
   *   Service object.
   */
  public function addService(ScrapperService $service): void;

  /**
   * Gets the registered service instance, if any.
   *
   * @param string $identifier
   *   Service identfier.
   *
   * @return \BTJ\Scrapper\Service\ScrapperService
   *   Service instance.
   */
  public function getService(string $identifier): ScrapperService;
}

