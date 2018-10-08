<?php

namespace BTJ\Scrapper\Container;

/**
 * Interface NewsContainerInterface.
 *
 * @package BTJ\Scrapper\Container
 */
interface NewsContainerInterface
{

    /**
     * Set container lead.
     *
     * @param string $lead
     *   Container lead.
     *
     * @return \BTJ\Scrapper\Container\NewsContainer
     *   News container object.
     */
    public function setLead($lead) : NewsContainer;

    /**
     * Get container lead.
     *
     * @return string
     *   Lead.
     */
    public function getLead() : string;

    /**
     * Set container list image path.
     *
     * @param string $image
     *   Container list image path.
     *
     * @return \BTJ\Scrapper\Container\NewsContainer
     *   News container object.
     */
    public function setListImage($image) : NewsContainer;

    /**
     * Get list image path.
     *
     * @return string
     *   List image path.
     */
    public function getListImage() : string;

    /**
     * Set container title image path.
     *
     * @param string $image
     *   Container title image path.
     *
     * @return \BTJ\Scrapper\Container\NewsContainer
     *   News container object.
     */
    public function setTitleImage($image) : NewsContainer;

    /**
     * Get title image path.
     *
     * @return string
     *   Title image path.
     */
    public function getTitleImage() : string;

    /**
     * Set container category.
     *
     * @param string $category
     *   Container category string.
     *
     * @return \BTJ\Scrapper\Container\NewsContainer
     *   News container object.
     */
    public function setCategory($category) : NewsContainer;

    /**
     * Get container category.
     *
     * @return string
     *   Category.
     */
    public function getCategory() : string;

    /**
     * Set container library.
     *
     * @param string $library
     *   Container library title.
     *
     * @return \BTJ\Scrapper\Container\NewsContainer
     *   News container object.
     */
    public function setLibrary($library) : NewsContainer;

    /**
     * Get container library.
     *
     * @return string
     *   Library.
     */
    public function getLibrary() : string;

    /**
     * Set container target audience.
     *
     * @param array $target
     *   Target audience.
     *
     * @return \BTJ\Scrapper\Container\NewsContainer
     *   News container object.
     */
    public function setTarget($target) : NewsContainer;

    /**
     * Get container target collection.
     *
     * @return array
     *   Target collection.
     */
    public function getTarget() : array;

    /**
     * Set container tags.
     *
     * @param array $tags
     *   Tags collection.
     *
     * @return \BTJ\Scrapper\Container\NewsContainer
     *   News container object.
     */
    public function setTags($tags) : NewsContainer;

    /**
     * Get collection of tags.
     *
     * @return array
     *   Tags.
     */
    public function getTags() : array;
}
