<?php
namespace HofUniversity\Sitemanagement\Controller;


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
 * BookingController
 */
class BookingController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * bookingRepository
     * 
     * @var \HofUniversity\Sitemanagement\Domain\Repository\BookingRepository
     * @inject
     */
    protected $bookingRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $bookings = $this->bookingRepository->findAll();
        $this->view->assign('bookings', $bookings);
    }

    /**
     * action show
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Booking $booking
     * @return void
     */
    public function showAction(\HofUniversity\Sitemanagement\Domain\Model\Booking $booking)
    {
        $this->view->assign('booking', $booking);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Booking $newBooking
     * @return void
     */
    public function createAction(\HofUniversity\Sitemanagement\Domain\Model\Booking $newBooking)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingRepository->add($newBooking);
        $this->forward('list', 'Car');
    }

    /**
     * action edit
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Booking $booking
     * @ignorevalidation $booking
     * @return void
     */
    public function editAction(\HofUniversity\Sitemanagement\Domain\Model\Booking $booking)
    {
        $this->view->assign('booking', $booking);
    }

    /**
     * action update
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Booking $booking
     * @return void
     */
    public function updateAction(\HofUniversity\Sitemanagement\Domain\Model\Booking $booking)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingRepository->update($booking);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Booking $booking
     * @return void
     */
    public function deleteAction(\HofUniversity\Sitemanagement\Domain\Model\Booking $booking)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->bookingRepository->remove($booking);
        $this->redirect('list');
    }
}
