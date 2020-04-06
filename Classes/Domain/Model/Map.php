<?php

namespace Ps\Evx\Domain\Model;

/***
 *
 * This file is part of the "Evx" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2020
 *
 ***/

/**
 * Map
 */
class Map extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
	 */
	protected $title = '';

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Evx\Domain\Model\MapTile>
	 * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
	 */
	protected $tiles = null;

	/**
	 * __construct
	 */
	public function __construct()	{
		$this->initStorageObjects();
	}

	/**
	 * @return void
	 */
	protected function initStorageObjects()	{
		$this->tiles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a MapTile
	 *
	 * @param \Ps\Evx\Domain\Model\MapTile $tile
	 * @return void
	 */
	public function addTile(\Ps\Evx\Domain\Model\MapTile $tile) {
		$this->tiles->attach($tile);
	}

	/**
	 * Removes a MapTile
	 *
	 * @param \Ps\Evx\Domain\Model\MapTile $tile The MapTile to be removed
	 * @return void
	 */
	public function removeTile(\Ps\Evx\Domain\Model\MapTile $tile)	{
		$this->tiles->detach($tile);
	}

	/**
	 * Returns the tiles
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Evx\Domain\Model\MapTile> $tiles
	 */
	public function getTiles() {
		return $this->tiles;
	}

	/**
	 * Sets the tiles
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Evx\Domain\Model\MapTile> $tiles
	 * @return void
	 */
	public function setTiles(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tiles) {
		$this->tiles = $tiles;
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
}
