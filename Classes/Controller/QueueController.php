<?php

namespace Ps\Evx\Controller;

use Ps\Evx\Domain\Model\Game;
use Ps\Evx\Domain\Repository\QueueRepository;
use Ps\Evx\Processor\Queue\AbstractProcessor;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class QueueController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @param string $processor
	 * @param \Ps\Evx\Domain\Model\Game $game
	 * @return void
	 */
	public function wizardAction($processor, Game $game) {
		$partial = trim(str_replace(['Ps\Evx\Processor\Queue\\', 'Processor'], null, $processor));

		$this->view->assign('game', $game);
		$this->view->assign('processor', $processor);
		$this->view->assign('partial', $partial);
	}

	/**
	 * @param string $processor
	 * @param \Ps\Evx\Domain\Model\Game $game
	 * @param array $arguments
	 */
	public function createAction($processor, $game, $arguments) {

		/** @var AbstractProcessor $creator */
		$creator = $this->objectManager->get($processor);
		$creator->setGame($game);
		$creator->setArguments($arguments);
		$creator->create();

		$this->redirect('playground', 'Game', null, ['game' => $game]);
	}

	/**
	 * @param \Ps\Evx\Domain\Model\Game $game
	 */
	public function processAction($game) {
		$queue = $this->objectManager->get(QueueRepository::class)->findAll([
			'game' => $game
		]);

		DebuggerUtility::var_dump($queue);
	}
}
