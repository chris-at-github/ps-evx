<?php

namespace Ps\Evx\Processor\Queue;

use Ps\Evx\Domain\Model\Game;
use Ps\Evx\Domain\Model\Queue;
use Ps\Evx\Domain\Repository\QueueRepository;
use TYPO3\CMS\Extbase\Object\ObjectManager;

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

abstract class AbstractProcessor {

	/**
	 * @var \Ps\Evx\Domain\Model\Game
	 */
	protected $game;

	/**
	 * @var array
	 */
	protected $arguments = [];

	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	/**
	 * @return void
	 */
	abstract public function create();

	/**
	 * @return void
	 */
	abstract public function finish();

	/**
	 * @param \Ps\Evx\Domain\Model\Game $game
	 */
	public function setGame(Game $game) {
		$this->game = $game;
	}

	/**
	 * @return \Ps\Evx\Domain\Model\Game
	 */
	public function getGame() {
		return $this->game;
	}

	/**
	 * @param array $arguments
	 */
	public function setArguments($arguments) {
		$this->arguments = $arguments;
	}

	/**
	 * @return array
	 */
	public function getArguments() {
		return $this->arguments;
	}

	/**
	 * @return \Ps\Evx\Domain\Model\Queue
	 */
	protected function getQueue() {

		/** @var Queue $queue */
		$queue = $this->objectManager->get(Queue::class);
		$queue->setProcessor(get_class($this));
		$queue->setGame($this->getGame());

		return $queue;
	}

	/**
	 * @param \Ps\Evx\Domain\Model\Queue $queue
	 */
	protected function store($queue) {
		if($queue->getUid() === null) {
			$this->objectManager->get(QueueRepository::class)->add($queue);

		} else {
			$this->objectManager->get(QueueRepository::class)->update($queue);
		}
	}
}
