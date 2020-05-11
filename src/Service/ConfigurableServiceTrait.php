<?php

namespace BTJ\Scrapper\Service;

/**
 * Trait ConfigurableServiceTrait.
 */
trait ConfigurableServiceTrait
{

    protected $config;

    protected $scrapingLimit;

    /**
     * {@inheritDoc}
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * {@inheritDoc}
     */
    public function setConfig(array $config): ConfigurableServiceInterface
    {
        $this->config = $config;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setScrapingLimit(int $scrapingLimit): ConfigurableServiceInterface
    {
        $this->scrapingLimit = $scrapingLimit;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getScrapingLimit(): int
    {
        return $this->scrapingLimit;
    }
}

