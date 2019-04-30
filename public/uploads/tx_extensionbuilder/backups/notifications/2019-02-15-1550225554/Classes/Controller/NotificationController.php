<?php
namespace HofUniversity\Notifications\Controller;


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
 * NotificationController
 */
class NotificationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * notificationRepository
     * 
     * @var \HofUniversity\Notifications\Domain\Repository\NotificationRepository
     * @inject
     */
    protected $notificationRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $notifications = $this->notificationRepository->findAll();
        $this->view->assign('notifications', $notifications);
    }

    /**
     * action show
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Notification $notification
     * @return void
     */
    public function showAction(\HofUniversity\Notifications\Domain\Model\Notification $notification)
    {
        $this->view->assign('notification', $notification);
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
     * @param \HofUniversity\Notifications\Domain\Model\Notification $newNotification
     * @return void
     */
    public function createAction(\HofUniversity\Notifications\Domain\Model\Notification $newNotification)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->notificationRepository->add($newNotification);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Notification $notification
     * @ignorevalidation $notification
     * @return void
     */
    public function editAction(\HofUniversity\Notifications\Domain\Model\Notification $notification)
    {
        $this->view->assign('notification', $notification);
    }

    /**
     * action update
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Notification $notification
     * @return void
     */
    public function updateAction(\HofUniversity\Notifications\Domain\Model\Notification $notification)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->notificationRepository->update($notification);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Notification $notification
     * @return void
     */
    public function deleteAction(\HofUniversity\Notifications\Domain\Model\Notification $notification)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->notificationRepository->remove($notification);
        $this->redirect('list');
    }
}
