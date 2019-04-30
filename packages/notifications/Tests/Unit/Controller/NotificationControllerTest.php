<?php
namespace HofUniversity\Notifications\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Deepak Balaram <deepak.balaram7@gmail.com>
 */
class NotificationControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\Notifications\Controller\NotificationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\HofUniversity\Notifications\Controller\NotificationController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllNotificationsFromRepositoryAndAssignsThemToView()
    {

        $allNotifications = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $notificationRepository = $this->getMockBuilder(\HofUniversity\Notifications\Domain\Repository\NotificationRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $notificationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allNotifications));
        $this->inject($this->subject, 'notificationRepository', $notificationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('notifications', $allNotifications);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenNotificationToView()
    {
        $notification = new \HofUniversity\Notifications\Domain\Model\Notification();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('notification', $notification);

        $this->subject->showAction($notification);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenNotificationToNotificationRepository()
    {
        $notification = new \HofUniversity\Notifications\Domain\Model\Notification();

        $notificationRepository = $this->getMockBuilder(\HofUniversity\Notifications\Domain\Repository\NotificationRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $notificationRepository->expects(self::once())->method('add')->with($notification);
        $this->inject($this->subject, 'notificationRepository', $notificationRepository);

        $this->subject->createAction($notification);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenNotificationToView()
    {
        $notification = new \HofUniversity\Notifications\Domain\Model\Notification();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('notification', $notification);

        $this->subject->editAction($notification);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenNotificationInNotificationRepository()
    {
        $notification = new \HofUniversity\Notifications\Domain\Model\Notification();

        $notificationRepository = $this->getMockBuilder(\HofUniversity\Notifications\Domain\Repository\NotificationRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $notificationRepository->expects(self::once())->method('update')->with($notification);
        $this->inject($this->subject, 'notificationRepository', $notificationRepository);

        $this->subject->updateAction($notification);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenNotificationFromNotificationRepository()
    {
        $notification = new \HofUniversity\Notifications\Domain\Model\Notification();

        $notificationRepository = $this->getMockBuilder(\HofUniversity\Notifications\Domain\Repository\NotificationRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $notificationRepository->expects(self::once())->method('remove')->with($notification);
        $this->inject($this->subject, 'notificationRepository', $notificationRepository);

        $this->subject->deleteAction($notification);
    }
}
