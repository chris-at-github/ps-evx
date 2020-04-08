<?php

namespace Ps\Evx\Processor\GameCreator;

use Ps\Evx\Domain\Model\Game;
use Ps\Evx\Domain\Model\GamePlayer;

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

class PlayerCreator extends AbstractCreator {

	/**
	 * @param \Ps\Evx\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	public function create(Game $game, $options) {

		/** @var GamePlayer $gamePlayer */
		$gamePlayer = $this->objectManager->get(GamePlayer::class);
		$gamePlayer->setTitle('Player #' . time());

		$game->addPlayer($gamePlayer);
	}
}
