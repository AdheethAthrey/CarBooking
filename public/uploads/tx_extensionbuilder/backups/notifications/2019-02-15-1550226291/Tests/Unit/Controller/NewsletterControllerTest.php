<?php
namespace HofUniversity\Notifications\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Deepak Balaram <deepak.balaram7@gmail.com>
 */
class NewsletterControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\Notifications\Controller\NewsletterController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\HofUniversity\Notifications\Controller\NewsletterController::class)
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
    public function listActionFetchesAllNewslettersFromRepositoryAndAssignsThemToView()
    {

        $allNewsletters = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $newsletterRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $newsletterRepository->expects(self::once())->method('findAll')->will(self::returnValue($allNewsletters));
        $this->inject($this->subject, 'newsletterRepository', $newsletterRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('newsletters', $allNewsletters);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenNewsletterToView()
    {
        $newsletter = new \HofUniversity\Notifications\Domain\Model\Newsletter();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('newsletter', $newsletter);

        $this->subject->showAction($newsletter);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenNewsletterToNewsletterRepository()
    {
        $newsletter = new \HofUniversity\Notifications\Domain\Model\Newsletter();

        $newsletterRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $newsletterRepository->expects(self::once())->method('add')->with($newsletter);
        $this->inject($this->subject, 'newsletterRepository', $newsletterRepository);

        $this->subject->createAction($newsletter);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenNewsletterToView()
    {
        $newsletter = new \HofUniversity\Notifications\Domain\Model\Newsletter();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('newsletter', $newsletter);

        $this->subject->editAction($newsletter);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenNewsletterInNewsletterRepository()
    {
        $newsletter = new \HofUniversity\Notifications\Domain\Model\Newsletter();

        $newsletterRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $newsletterRepository->expects(self::once())->method('update')->with($newsletter);
        $this->inject($this->subject, 'newsletterRepository', $newsletterRepository);

        $this->subject->updateAction($newsletter);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenNewsletterFromNewsletterRepository()
    {
        $newsletter = new \HofUniversity\Notifications\Domain\Model\Newsletter();

        $newsletterRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $newsletterRepository->expects(self::once())->method('remove')->with($newsletter);
        $this->inject($this->subject, 'newsletterRepository', $newsletterRepository);

        $this->subject->deleteAction($newsletter);
    }
}
