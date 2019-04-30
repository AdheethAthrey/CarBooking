<?php
namespace HofUniversity\Notifications\Domain\Model;


/***
 *
 * This file is part of the "Notifications App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Deepak Balaram <deepak.balaram7@gmail.com>, Hof University
 *
 ***/
/**
 * Notification
 */
class Notification extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * id
     * 
     * @var int
     */
    protected $id = 0;

    /**
     * date
     * 
     * @var string
     */
    protected $date = '';

    /**
     * newsletter
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\Notifications\Domain\Model\Newsletter>
     * @cascade remove
     */
    protected $newsletter = null;

    /**
     * offer
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\Notifications\Domain\Model\Offer>
     * @cascade remove
     */
    protected $offer = null;

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

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
        $this->newsletter = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->offer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the date
     * 
     * @return string $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param string $date
     * @return void
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Adds a Newsletter
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Newsletter $newsletter
     * @return void
     */
    public function addNewsletter(\HofUniversity\Notifications\Domain\Model\Newsletter $newsletter)
    {
        $this->newsletter->attach($newsletter);
    }

    /**
     * Removes a Newsletter
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Newsletter $newsletterToRemove The Newsletter to be removed
     * @return void
     */
    public function removeNewsletter(\HofUniversity\Notifications\Domain\Model\Newsletter $newsletterToRemove)
    {
        $this->newsletter->detach($newsletterToRemove);
    }

    /**
     * Returns the newsletter
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\Notifications\Domain\Model\Newsletter> $newsletter
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Sets the newsletter
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\Notifications\Domain\Model\Newsletter> $newsletter
     * @return void
     */
    public function setNewsletter(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * Adds a Offer
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Offer $offer
     * @return void
     */
    public function addOffer(\HofUniversity\Notifications\Domain\Model\Offer $offer)
    {
        $this->offer->attach($offer);
    }

    /**
     * Removes a Offer
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Offer $offerToRemove The Offer to be removed
     * @return void
     */
    public function removeOffer(\HofUniversity\Notifications\Domain\Model\Offer $offerToRemove)
    {
        $this->offer->detach($offerToRemove);
    }

    /**
     * Returns the offer
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\Notifications\Domain\Model\Offer> $offer
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets the offer
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\Notifications\Domain\Model\Offer> $offer
     * @return void
     */
    public function setOffer(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $offer)
    {
        $this->offer = $offer;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
