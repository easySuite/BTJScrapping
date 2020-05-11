<?php

namespace BTJ\Scrapper\Service;

/**
 * Interface ConfigurableServiceInterface
 *
 * @package BTJ\Scrapper\Service
 */
interface ConfigurableServiceInterface
{

    /**
     * Gets the crawler configuration.
     *
     * @return array
     *   A set of css selectors.
     */
    public function getConfig(): array;

    /**
     * Sets crawler configuration.
     *
     * @return self
     *   This object.
     */
    public function setConfig(array $config): self;

    /**
     * Gets hard limit of number of items scraped.
     */
    public function getScrapingLimit(): int;

    /**
     * Sets hard limit of number of items scraped.
     *
     * @return self
     *   This object.
     */
    public function setScrapingLimit(int $scrapingLimit): self;
}

