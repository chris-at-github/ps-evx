<?php

namespace Ps\Evx\Domain\Model;

/***
 *
 * This file is part of the "Ai" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Christian Pschorr <pschorr.christian@gmail.com>
 *
 ***/

/**
 * GameMapTile
 */
class GameMapTile extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * origin
	 *
	 * @var \Ps\Evx\Domain\Model\MapTile
	 */
	protected $origin = null;

	/**
	 * game
	 *
	 * @var \Ps\Evx\Domain\Model\Game
	 */
	protected $game = null;

	/**
	 * Returns the origin
	 *
	 * @return \Ps\Evx\Domain\Model\MapTile $origin
	 */
	public function getOrigin() {
		return $this->origin;
	}

	/**
	 * Sets the origin
	 *
	 * @param \Ps\Evx\Domain\Model\MapTile $origin
	 * @return void
	 */
	public function setOrigin(\Ps\Evx\Domain\Model\MapTile $origin) {
		$this->origin = $origin;
	}

	/**
	 * Returns the game
	 *
	 * @return \Ps\Evx\Domain\Model\Game $game
	 */
	public function getGame() {
		return $this->game;
	}

	/**
	 * Sets the game
	 *
	 * @param \Ps\Evx\Domain\Model\Game $game
	 * @return void
	 */
	public function setGame(\Ps\Evx\Domain\Model\Game $game) {
		$this->game = $game;
	}
}
