<?php
namespace Ps\Evx\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class MapTileTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ps\Evx\Domain\Model\MapTile
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ps\Evx\Domain\Model\MapTile();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getXReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getX()
        );
    }

    /**
     * @test
     */
    public function setXForIntSetsX()
    {
        $this->subject->setX(12);

        self::assertAttributeEquals(
            12,
            'x',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getYReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getY()
        );
    }

    /**
     * @test
     */
    public function setYForIntSetsY()
    {
        $this->subject->setY(12);

        self::assertAttributeEquals(
            12,
            'y',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMapReturnsInitialValueForMap()
    {
        self::assertEquals(
            null,
            $this->subject->getMap()
        );
    }

    /**
     * @test
     */
    public function setMapForMapSetsMap()
    {
        $mapFixture = new \Ps\Evx\Domain\Model\Map();
        $this->subject->setMap($mapFixture);

        self::assertAttributeEquals(
            $mapFixture,
            'map',
            $this->subject
        );
    }
}
