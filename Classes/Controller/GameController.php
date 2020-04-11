<?php

namespace Ps\Evx\Controller;

use Ps\Evx\Domain\Model\Game;
use Ps\Evx\Domain\Model\Map;
use Ps\Evx\Domain\Repository\GameRepository;
use Ps\Evx\Domain\Repository\MapRepository;
use Ps\Evx\Domain\Repository\QueueRepository;
use Ps\Evx\Processor\Queue\SettlementProcessor;
use Ps\Evx\Processor\GameCreator\AbstractCreator;
use Ps\Evx\Processor\GameCreator\MapCreator;
use Ps\Evx\Processor\GameCreator\PlayerCreator;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('games', $this->objectManager->get(GameRepository::class)->findAll());
		$this->view->assign('maps', $this->objectManager->get(MapRepository::class)->findAll());
	}

	/**
	 * @param \Ps\Evx\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	public function createAction(Game $game, $options = []) {
		$this->objectManager->get(GameRepository::class)->add($game);

		foreach([
			MapCreator::class,
			PlayerCreator::class,
		] as $fqcn) {

			/** @var AbstractCreator $gameCreator */
			$gameCreator = $this->objectManager->get($fqcn);
			$gameCreator->create($game, $options);
		}

		$this->redirect('index');
	}

	/**
	 * @param \Ps\Evx\Domain\Model\Game $game
	 * @return void
	 */
	public function playgroundAction(Game $game) {
		$this->view->assign('game', $game);
		$this->view->assign('queueProcessors', [
			SettlementProcessor::class
		]);
		$this->view->assign('queue', $this->objectManager->get(QueueRepository::class)->findAll([
			'game' => $game
		]));

		// DebuggerUtility::var_dump($game);
	}
}