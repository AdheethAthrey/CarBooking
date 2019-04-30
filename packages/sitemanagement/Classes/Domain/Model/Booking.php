<?php
namespace HofUniversity\Sitemanagement\Domain\Model;


/***
 *
 * This file is part of the "Site Management" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Deepak Balaram <deepak.balaram7@gmail.com>, Hof University
 *
 ***/
/**
 * Booking
 */
class Booking extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * bookingId
     * 
     * @var int
     */
    protected $bookingId = 0;

    /**
     * pickUpDate
     * 
     * @var string
     */
    protected $pickUpDate = '';

    /**
     * pickUpLocation
     * 
     * @var string
     */
    protected $pickUpLocation = '';

    /**
     * dropOffDate
     * 
     * @var string
     */
    protected $dropOffDate = '';

    /**
     * dropOffLocation
     * 
     * @var string
     */
    protected $dropOffLocation = '';

    /**
     * Returns the bookingId
     * 
     * @return int $bookingId
     */
    public function getBookingId()
    {
        return $this->bookingId;
    }

    /**
     * Sets the bookingId
     * 
     * @param int $bookingId
     * @return void
     */
    public function setBookingId($bookingId)
    {
        $this->bookingId = $bookingId;
    }

    /**
     * Returns the pickUpDate
     * 
     * @return string $pickUpDate
     */
    public function getPickUpDate()
    {
        return $this->pickUpDate;
    }

    /**
     * Sets the pickUpDate
     * 
     * @param string $pickUpDate
     * @return void
     */
    public function setPickUpDate($pickUpDate)
    {
        $this->pickUpDate = $pickUpDate;
    }

    /**
     * Returns the pickUpLocation
     * 
     * @return string $pickUpLocation
     */
    public function getPickUpLocation()
    {
        return $this->pickUpLocation;
    }

    /**
     * Sets the pickUpLocation
     * 
     * @param string $pickUpLocation
     * @return void
     */
    public function setPickUpLocation($pickUpLocation)
    {
        $this->pickUpLocation = $pickUpLocation;
    }

    /**
     * Returns the dropOffDate
     * 
     * @return string $dropOffDate
     */
    public function getDropOffDate()
    {
        return $this->dropOffDate;
    }

    /**
     * Sets the dropOffDate
     * 
     * @param string $dropOffDate
     * @return void
     */
    public function setDropOffDate($dropOffDate)
    {
        $this->dropOffDate = $dropOffDate;
    }

    /**
     * Returns the dropOffLocation
     * 
     * @return string $dropOffLocation
     */
    public function getDropOffLocation()
    {
        return $this->dropOffLocation;
    }

    /**
     * Sets the dropOffLocation
     * 
     * @param string $dropOffLocation
     * @return void
     */
    public function setDropOffLocation($dropOffLocation)
    {
        $this->dropOffLocation = $dropOffLocation;
    }
}
