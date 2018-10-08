<?php

namespace BTJ\Scrapper\Container;

/**
 * Interface LibraryContainerInterface.
 *
 * @package BTJ\Scrapper\Container
 */
interface LibraryContainerInterface
{

    /**
     * Set contaier lead field.
     *
     * @param string $lead
     *   Container lead.
     *
     * @return \BTJ\Scrapper\Container\LibraryContainer
     *   Library container object.
     */
    public function setLead($lead) : LibraryContainer;

    /**
     * Get lead.
     *
     * @return string
     *   Lead.
     */
    public function getLead() : string;

    /**
     * Set container title image path.
     *
     * @param string $image
     *   Container title image path.
     *
     * @return \BTJ\Scrapper\Container\LibraryContainer
     *   Library container object.
     */
    public function setTitleImage($image) : LibraryContainer;

    /**
     * Get title image path.
     *
     * @return string
     *   Title image path.
     */
    public function getTitleImage() : string;

    /**
     * Set container email.
     *
     * @param string $email
     *   Container email.
     *
     * @return \BTJ\Scrapper\Container\LibraryContainer
     *   Library container object.
     */
    public function setEmail($email) : LibraryContainer;

    /**
     * Get email.
     *
     * @return string
     *   Email.
     */
    public function getEmail() : string;

    /**
     * Set container phone number
     *
     * @param string $phone
     *   Container phone number.
     *
     * @return \BTJ\Scrapper\Container\LibraryContainer
     *   Library container object.
     */
    public function setPhone($phone) : LibraryContainer;


    /**
     * Get phone number.
     *
     * @return string
     *   Phone number.
     */
    public function getPhone() : string;

    /**
     * Set container street
     *
     * @param string $street
     *   Container street.
     *
     * @return \BTJ\Scrapper\Container\LibraryContainer
     *   Library container object.
     */
    public function setStreet($street) : LibraryContainer;


    /**
     * Get street.
     *
     * @return string
     *   Library street.
     */
    public function getStreet() : string;

    /**
     * Set container zip code
     *
     * @param string $zip
     *   Container zip code.
     *
     * @return \BTJ\Scrapper\Container\LibraryContainer
     *   Library container object.
     */
    public function setZip($zip) : LibraryContainer;


    /**
     * Get zip code.
     *
     * @return string
     *   Library zip code.
     */
    public function getZip() : string;

    /**
     * Set container city
     *
     * @param string $city
     *   Container city.
     *
     * @return \BTJ\Scrapper\Container\LibraryContainer
     *   Library container object.
     */
    public function setCity($city) : LibraryContainer;


    /**
     * Get Library city.
     *
     * @return string
     *   Library city.
     */
    public function getCity() : string;

    /**
     * Set opening hours
     *
     * @param array $hours
     *   Opening hours.
     *
     * @return \BTJ\Scrapper\Container\LibraryContainer
     *   Library container object.
     */
    public function setOpeningHours($hours) : LibraryContainer;


    /**
     * Get Opening Hours array.
     *
     * @return array
     *   Library opening hours.
     */
    public function getOpeningHours() : array;
}
