<?php
namespace HofUniversity\Sitemanagement\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Deepak Balaram <deepak.balaram7@gmail.com>
 */
class CarTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\Sitemanagement\Domain\Model\Car
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofUniversity\Sitemanagement\Domain\Model\Car();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForIntSetsId()
    {
        $this->subject->setId(12);

        self::assertAttributeEquals(
            12,
            'id',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getModelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModel()
        );
    }

    /**
     * @test
     */
    public function setModelForStringSetsModel()
    {
        $this->subject->setModel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'model',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getColorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColor()
        );
    }

    /**
     * @test
     */
    public function setColorForStringSetsColor()
    {
        $this->subject->setColor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'color',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTransmissionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTransmission()
        );
    }

    /**
     * @test
     */
    public function setTransmissionForStringSetsTransmission()
    {
        $this->subject->setTransmission('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'transmission',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFuelTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFuelType()
        );
    }

    /**
     * @test
     */
    public function setFuelTypeForStringSetsFuelType()
    {
        $this->subject->setFuelType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fuelType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSeatingReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSeating()
        );
    }

    /**
     * @test
     */
    public function setSeatingForIntSetsSeating()
    {
        $this->subject->setSeating(12);

        self::assertAttributeEquals(
            12,
            'seating',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAvailabilityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAvailability()
        );
    }

    /**
     * @test
     */
    public function setAvailabilityForStringSetsAvailability()
    {
        $this->subject->setAvailability('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'availability',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBookingReturnsInitialValueForBooking()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBooking()
        );
    }

    /**
     * @test
     */
    public function setBookingForObjectStorageContainingBookingSetsBooking()
    {
        $booking = new \HofUniversity\Sitemanagement\Domain\Model\Booking();
        $objectStorageHoldingExactlyOneBooking = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBooking->attach($booking);
        $this->subject->setBooking($objectStorageHoldingExactlyOneBooking);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBooking,
            'booking',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addBookingToObjectStorageHoldingBooking()
    {
        $booking = new \HofUniversity\Sitemanagement\Domain\Model\Booking();
        $bookingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($booking));
        $this->inject($this->subject, 'booking', $bookingObjectStorageMock);

        $this->subject->addBooking($booking);
    }

    /**
     * @test
     */
    public function removeBookingFromObjectStorageHoldingBooking()
    {
        $booking = new \HofUniversity\Sitemanagement\Domain\Model\Booking();
        $bookingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($booking));
        $this->inject($this->subject, 'booking', $bookingObjectStorageMock);

        $this->subject->removeBooking($booking);
    }
}
