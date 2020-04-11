<?php

namespace Ps\Evx\Processor\Queue;

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

class SettlementProcessor extends AbstractProcessor {

	/**
	 * @return void
	 */
	public function create() {
		$queue = $this->getQueue();
		//$queue->setArguments($this->getArguments());
		$queue->setTurn(0);

		$this->store($queue);
	}

	/**
	 * @return void
	 */
	public function finish() {
	}
}
