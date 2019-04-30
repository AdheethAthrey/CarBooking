<?php
namespace HofUniversity\Notifications\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Deepak Balaram <deepak.balaram7@gmail.com>
 */
class NotificationTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\Notifications\Domain\Model\Notification
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofUniversity\Notifications\Domain\Model\Notification();
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
    public function getDateReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForStringSetsDate()
    {
        $this->subject->setDate('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'date',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNewsletterReturnsInitialValueForNewsletter()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getNewsletter()
        );
    }

    /**
     * @test
     */
    public function setNewsletterForObjectStorageContainingNewsletterSetsNewsletter()
    {
        $newsletter = new \HofUniversity\Notifications\Domain\Model\Newsletter();
        $objectStorageHoldingExactlyOneNewsletter = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneNewsletter->attach($newsletter);
        $this->subject->setNewsletter($objectStorageHoldingExactlyOneNewsletter);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneNewsletter,
            'newsletter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addNewsletterToObjectStorageHoldingNewsletter()
    {
        $newsletter = new \HofUniversity\Notifications\Domain\Model\Newsletter();
        $newsletterObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $newsletterObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($newsletter));
        $this->inject($this->subject, 'newsletter', $newsletterObjectStorageMock);

        $this->subject->addNewsletter($newsletter);
    }

    /**
     * @test
     */
    public function removeNewsletterFromObjectStorageHoldingNewsletter()
    {
        $newsletter = new \HofUniversity\Notifications\Domain\Model\Newsletter();
        $newsletterObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $newsletterObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($newsletter));
        $this->inject($this->subject, 'newsletter', $newsletterObjectStorageMock);

        $this->subject->removeNewsletter($newsletter);
    }

    /**
     * @test
     */
    public function getOfferReturnsInitialValueForOffer()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOffer()
        );
    }

    /**
     * @test
     */
    public function setOfferForObjectStorageContainingOfferSetsOffer()
    {
        $offer = new \HofUniversity\Notifications\Domain\Model\Offer();
        $objectStorageHoldingExactlyOneOffer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOffer->attach($offer);
        $this->subject->setOffer($objectStorageHoldingExactlyOneOffer);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOffer,
            'offer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addOfferToObjectStorageHoldingOffer()
    {
        $offer = new \HofUniversity\Notifications\Domain\Model\Offer();
        $offerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $offerObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($offer));
        $this->inject($this->subject, 'offer', $offerObjectStorageMock);

        $this->subject->addOffer($offer);
    }

    /**
     * @test
     */
    public function removeOfferFromObjectStorageHoldingOffer()
    {
        $offer = new \HofUniversity\Notifications\Domain\Model\Offer();
        $offerObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $offerObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($offer));
        $this->inject($this->subject, 'offer', $offerObjectStorageMock);

        $this->subject->removeOffer($offer);
    }
}
