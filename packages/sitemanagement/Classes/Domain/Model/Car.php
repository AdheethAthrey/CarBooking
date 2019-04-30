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
 * Car
 */
class Car extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * id
     * 
     * @var int
     */
    protected $id = 0;

    /**
     * model
     * 
     * @var string
     */
    protected $model = '';

    /**
     * color
     * 
     * @var string
     */
    protected $color = '';

    /**
     * transmission
     * 
     * @var string
     */
    protected $transmission = '';

    /**
     * fuelType
     * 
     * @var string
     */
    protected $fuelType = '';

    /**
     * seating
     * 
     * @var int
     */
    protected $seating = 0;

    /**
     * availability
     * 
     * @var string
     */
    protected $availability = '';

    /**
     * booking
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\Sitemanagement\Domain\Model\Booking>
     * @cascade remove
     */
    protected $booking = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->booking = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the id
     * 
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     * 
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Returns the model
     * 
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the model
     * 
     * @param string $model
     * @return void
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Returns the color
     * 
     * @return string $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets the color
     * 
     * @param string $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Returns the transmission
     * 
     * @return string $transmission
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Sets the transmission
     * 
     * @param string $transmission
     * @return void
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }

    /**
     * Returns the fuelType
     * 
     * @return string $fuelType
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Sets the fuelType
     * 
     * @param string $fuelType
     * @return void
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
    }

    /**
     * Returns the seating
     * 
     * @return int $seating
     */
    public function getSeating()
    {
        return $this->seating;
    }

    /**
     * Sets the seating
     * 
     * @param int $seating
     * @return void
     */
    public function setSeating($seating)
    {
        $this->seating = $seating;
    }

    /**
     * Returns the availability
     * 
     * @return string $availability
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets the availability
     * 
     * @param string $availability
     * @return void
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * Adds a Booking
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Booking $booking
     * @return void
     */
    public function addBooking(\HofUniversity\Sitemanagement\Domain\Model\Booking $booking)
    {
        $this->booking->attach($booking);
    }

    /**
     * Removes a Booking
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Booking $bookingToRemove The Booking to be removed
     * @return void
     */
    public function removeBooking(\HofUniversity\Sitemanagement\Domain\Model\Booking $bookingToRemove)
    {
        $this->booking->detach($bookingToRemove);
    }

    /**
     * Returns the booking
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\Sitemanagement\Domain\Model\Booking> $booking
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Sets the booking
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\Sitemanagement\Domain\Model\Booking> $booking
     * @return void
     */
    public function setBooking(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $booking)
    {
        $this->booking = $booking;
    }
}
