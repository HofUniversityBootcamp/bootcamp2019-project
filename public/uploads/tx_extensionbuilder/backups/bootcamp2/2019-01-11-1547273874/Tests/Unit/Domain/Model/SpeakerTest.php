<?php
namespace Bootcamp2\Bootcamp2\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SpeakerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Bootcamp2\Bootcamp2\Domain\Model\Speaker
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Bootcamp2\Bootcamp2\Domain\Model\Speaker();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSessionsReturnsInitialValueForSession()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSessions()
        );
    }

    /**
     * @test
     */
    public function setSessionsForObjectStorageContainingSessionSetsSessions()
    {
        $session = new \Bootcamp2\Bootcamp2\Domain\Model\Session();
        $objectStorageHoldingExactlyOneSessions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSessions->attach($session);
        $this->subject->setSessions($objectStorageHoldingExactlyOneSessions);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSessions,
            'sessions',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSessionToObjectStorageHoldingSessions()
    {
        $session = new \Bootcamp2\Bootcamp2\Domain\Model\Session();
        $sessionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sessionsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($session));
        $this->inject($this->subject, 'sessions', $sessionsObjectStorageMock);

        $this->subject->addSession($session);
    }

    /**
     * @test
     */
    public function removeSessionFromObjectStorageHoldingSessions()
    {
        $session = new \Bootcamp2\Bootcamp2\Domain\Model\Session();
        $sessionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sessionsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($session));
        $this->inject($this->subject, 'sessions', $sessionsObjectStorageMock);

        $this->subject->removeSession($session);
    }
}
