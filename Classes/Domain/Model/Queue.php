<?php
namespace Ps\Evx\Domain\Model;

use Ps\Evx\Domain\Model\Game;

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
 * Queue
 */
class Queue extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * processor
	 *
	 * @var string
	 */
	protected $processor = '';

	/**
	 * @var int
	 */
	protected $turn = 0;

	/**
	 * arguments
	 *
	 * @var string
	 */
	protected $arguments = '';

	/**
	 * game
	 *
	 * @var \Ps\Evx\Domain\Model\Game
	 */
	protected $game = null;

	/**
	 * Returns the processor
	 *
	 * @return string $processor
	 */
	public function getProcessor() {
		return $this->processor;
	}

	/**
	 * Sets the processor
	 *
	 * @param string $processor
	 * @return void
	 */
	public function setProcessor($processor) {
		$this->processor = $processor;
	}

	/**
	 * @return int $turn
	 */
	public function getTurn() {
		return $this->turn;
	}

	/**
	 * Sets the expiryDate
	 *
	 * @param int $turn
	 * @return void
	 */
	public function setTurn($turn) {
		$this->turn = $turn;
	}

	/**
	 * Returns the arguments
	 *
	 * @return string $arguments
	 */
	public function getArguments() {
		return $this->arguments;
	}

	/**
	 * Sets the arguments
	 *
	 * @param string|array $arguments
	 * @return void
	 */
	public function setArguments($arguments) {
		if(is_array($arguments) === true) {
			$arguments = json_encode($arguments);
		}

		$this->arguments = $arguments;
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
	public function setGame(Game $game) {
		$this->game = $game;
	}
}
