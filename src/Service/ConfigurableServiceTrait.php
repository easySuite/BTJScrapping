<?php

namespace BTJ\Scrapper\Service;

/**
 * Trait ConfigurableServiceTrait.
 */
trait ConfigurableServiceTrait {
  protected $config;

  public function setConfig(array $config) {
    $this->config = $config;
  }

  public function getConfig(): array {
    return $this->config;
  }
}

