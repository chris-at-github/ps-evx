<?php

namespace Ps\Evx\Processor\GameCreator;

use Ps\Evx\Domain\Model\Game;
use Ps\Evx\Domain\Model\GameMapTile;
use Ps\Evx\Domain\Repository\GameRepository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

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

class MapCreator extends AbstractCreator {

	/**
	 * @param \Ps\Evx\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	public function create(Game $game, $options) {
	
		// Durchlaufe alle Tiles der Karte und fuege sie dem Spiel hinzu
		/** @var \Ps\Evx\Domain\Model\MapTile $tile */
		foreach($game->getMap()->getTiles() as $tile) {
			
			/** @var GameMapTile $gameMapTile */
			$gameMapTile = $this->objectManager->get(GameMapTile::class);
			$gameMapTile->setOrigin($tile);

			$game->addTile($gameMapTile);
		}
	}
}