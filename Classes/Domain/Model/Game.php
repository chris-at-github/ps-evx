<?php

namespace Ps\Evx\Domain\Model;

/***
 *
 * This file is part of the "Ai" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2020
 *
 ***/

class Game extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * map
	 *
	 * @var \Ps\Evx\Domain\Model\Map
	 */
	protected $map = null;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Evx\Domain\Model\GameMapTile>
	 * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
	 */
	protected $tiles = null;

//	/**
//	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Evx\Domain\Model\GamePlayer>
//	 * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
//	 */
//	protected $players = null;

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
//		$this->players = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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

	/**
	 * Returns the map
	 *
	 * @return \Ps\Evx\Domain\Model\Map $map
	 */
	public function getMap() {
		return $this->map;
	}

	/**
	 * Sets the map
	 *
	 * @param \Ps\Evx\Domain\Model\Map $map
	 * @return void
	 */
	public function setMap(\Ps\Evx\Domain\Model\Map $map) {
		$this->map = $map;
	}

	/**
	 * Adds a MapTile
	 *
	 * @param \Ps\Evx\Domain\Model\GameMapTile $tile
	 * @return void
	 */
	public function addTile(\Ps\Evx\Domain\Model\GameMapTile $tile) {
		$this->tiles->attach($tile);
	}

	/**
	 * Removes a MapTile
	 *
	 * @param \Ps\Evx\Domain\Model\GameMapTile $tile The MapTile to be removed
	 * @return void
	 */
	public function removeTile(\Ps\Evx\Domain\Model\GameMapTile $tile)	{
		$this->tiles->detach($tile);
	}

	/**
	 * Returns the tiles
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Evx\Domain\Model\GameMapTile> $tiles
	 */
	public function getTiles() {
		return $this->tiles;
	}

	/**
	 * Sets the tiles
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Evx\Domain\Model\GameMapTile> $tiles
	 * @return void
	 */
	public function setTiles(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tiles) {
		$this->tiles = $tiles;
	}

//	/**
//	 * @param \Ps\Evx\Domain\Model\GamePlayer $player
//	 * @return void
//	 */
//	public function addPlayer(\Ps\Evx\Domain\Model\GamePlayer $player) {
//		$this->players->attach($player);
//	}
//
//	/**
//	 * @param \Ps\Evx\Domain\Model\GamePlayer $player
//	 * @return void
//	 */
//	public function removePlayer(\Ps\Evx\Domain\Model\GamePlayer $player) {
//		$this->players->detach($player);
//	}
//
//	/**
//	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Evx\Domain\Model\GamePlayer> $players
//	 */
//	public function getPlayers() {
//		return $this->players;
//	}
//
//	/**
//	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ps\Evx\Domain\Model\GamePlayer> $players
//	 * @return void
//	 */
//	public function setPlayers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $players) {
//		$this->players = $players;
//	}
}
