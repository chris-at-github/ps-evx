<?php
namespace Ps\Evx\Domain\Model;


/***
 *
 * This file is part of the "Evx" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 
 *
 ***/
/**
 * MapTile
 */
class MapTile extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * x
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $x = 0;

    /**
     * y
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $y = 0;

    /**
     * map
     * 
     * @var \Ps\Evx\Domain\Model\Map
     */
    protected $map = null;

    /**
     * Returns the x
     * 
     * @return int $x
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Sets the x
     * 
     * @param int $x
     * @return void
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * Returns the y
     * 
     * @return int $y
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Sets the y
     * 
     * @param int $y
     * @return void
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * Returns the map
     * 
     * @return \Ps\Evx\Domain\Model\Map $map
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Sets the map
     * 
     * @param \Ps\Evx\Domain\Model\Map $map
     * @return void
     */
    public function setMap(\Ps\Evx\Domain\Model\Map $map)
    {
        $this->map = $map;
    }
}
