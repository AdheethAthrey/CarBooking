<?php
namespace HofUniversity\Sitemanagement\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Deepak Balaram <deepak.balaram7@gmail.com>
 */
class BookingTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\Sitemanagement\Domain\Model\Booking
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofUniversity\Sitemanagement\Domain\Model\Booking();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBookingIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getBookingId()
        );
    }

    /**
     * @test
     */
    public function setBookingIdForIntSetsBookingId()
    {
        $this->subject->setBookingId(12);

        self::assertAttributeEquals(
            12,
            'bookingId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPickUpDateReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPickUpDate()
        );
    }

    /**
     * @test
     */
    public function setPickUpDateForStringSetsPickUpDate()
    {
        $this->subject->setPickUpDate('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pickUpDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPickUpLocationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPickUpLocation()
        );
    }

    /**
     * @test
     */
    public function setPickUpLocationForStringSetsPickUpLocation()
    {
        $this->subject->setPickUpLocation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pickUpLocation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDropOffDateReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDropOffDate()
        );
    }

    /**
     * @test
     */
    public function setDropOffDateForStringSetsDropOffDate()
    {
        $this->subject->setDropOffDate('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dropOffDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDropOffLocationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDropOffLocation()
        );
    }

    /**
     * @test
     */
    public function setDropOffLocationForStringSetsDropOffLocation()
    {
        $this->subject->setDropOffLocation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dropOffLocation',
            $this->subject
        );
    }
}
