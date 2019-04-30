<?php
namespace HofUniversity\Sitemanagement\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Deepak Balaram <deepak.balaram7@gmail.com>
 */
class CarControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\Sitemanagement\Controller\CarController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\HofUniversity\Sitemanagement\Controller\CarController::class)
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
    public function listActionFetchesAllCarsFromRepositoryAndAssignsThemToView()
    {

        $allCars = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $carRepository = $this->getMockBuilder(\HofUniversity\Sitemanagement\Domain\Repository\CarRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $carRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCars));
        $this->inject($this->subject, 'carRepository', $carRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cars', $allCars);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCarToView()
    {
        $car = new \HofUniversity\Sitemanagement\Domain\Model\Car();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('car', $car);

        $this->subject->showAction($car);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCarToCarRepository()
    {
        $car = new \HofUniversity\Sitemanagement\Domain\Model\Car();

        $carRepository = $this->getMockBuilder(\HofUniversity\Sitemanagement\Domain\Repository\CarRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $carRepository->expects(self::once())->method('add')->with($car);
        $this->inject($this->subject, 'carRepository', $carRepository);

        $this->subject->createAction($car);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCarToView()
    {
        $car = new \HofUniversity\Sitemanagement\Domain\Model\Car();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('car', $car);

        $this->subject->editAction($car);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCarInCarRepository()
    {
        $car = new \HofUniversity\Sitemanagement\Domain\Model\Car();

        $carRepository = $this->getMockBuilder(\HofUniversity\Sitemanagement\Domain\Repository\CarRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $carRepository->expects(self::once())->method('update')->with($car);
        $this->inject($this->subject, 'carRepository', $carRepository);

        $this->subject->updateAction($car);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCarFromCarRepository()
    {
        $car = new \HofUniversity\Sitemanagement\Domain\Model\Car();

        $carRepository = $this->getMockBuilder(\HofUniversity\Sitemanagement\Domain\Repository\CarRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $carRepository->expects(self::once())->method('remove')->with($car);
        $this->inject($this->subject, 'carRepository', $carRepository);

        $this->subject->deleteAction($car);
    }
}
