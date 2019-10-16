<?php

namespace BTJ\Scrapper\Service;

/**
 * Interface ConfigurableServiceInterface
 *
 * @package BTJ\Scrapper\Service
 */
interface ConfigurableServiceInterface {

  /**
   * Gets the crawler configuration.
   *
   * @return array
   *   A set of css identifiers.
   */
  public function getConfig(): array;

  /**
   * @return array
   */
  public function setConfig(array $config): self;
}

