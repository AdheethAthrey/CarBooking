<?php
namespace HofUniversity\Notifications\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Deepak Balaram <deepak.balaram7@gmail.com>
 */
class OfferControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\Notifications\Controller\OfferController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\HofUniversity\Notifications\Controller\OfferController::class)
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
    public function listActionFetchesAllOffersFromRepositoryAndAssignsThemToView()
    {

        $allOffers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $offerRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $offerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOffers));
        $this->inject($this->subject, 'offerRepository', $offerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('offers', $allOffers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOfferToView()
    {
        $offer = new \HofUniversity\Notifications\Domain\Model\Offer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('offer', $offer);

        $this->subject->showAction($offer);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenOfferToOfferRepository()
    {
        $offer = new \HofUniversity\Notifications\Domain\Model\Offer();

        $offerRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $offerRepository->expects(self::once())->method('add')->with($offer);
        $this->inject($this->subject, 'offerRepository', $offerRepository);

        $this->subject->createAction($offer);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenOfferToView()
    {
        $offer = new \HofUniversity\Notifications\Domain\Model\Offer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('offer', $offer);

        $this->subject->editAction($offer);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenOfferInOfferRepository()
    {
        $offer = new \HofUniversity\Notifications\Domain\Model\Offer();

        $offerRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $offerRepository->expects(self::once())->method('update')->with($offer);
        $this->inject($this->subject, 'offerRepository', $offerRepository);

        $this->subject->updateAction($offer);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenOfferFromOfferRepository()
    {
        $offer = new \HofUniversity\Notifications\Domain\Model\Offer();

        $offerRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $offerRepository->expects(self::once())->method('remove')->with($offer);
        $this->inject($this->subject, 'offerRepository', $offerRepository);

        $this->subject->deleteAction($offer);
    }
}
