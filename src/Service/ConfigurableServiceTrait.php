<?php

namespace BTJ\Scrapper\Service;

/**
 * Trait ConfigurableServiceTrait.
 */
trait ConfigurableServiceTrait {
  protected $config;

  public function setConfig(array $config): ConfigurableServiceInterface {
    $this->config = $config;

    return $this;
  }

  public function getConfig(): array {
    return $this->config;
  }
}

