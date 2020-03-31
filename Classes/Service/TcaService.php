<?php

namespace Ps\Evx\Service;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class TcaService {

	/**
	 * @param array $parameter
	 * @param $parentObject
	 */
	public function getTileTitle(&$parameter) {
		$parameter['title'] = $parameter['row']['x'] . ' | ' . $parameter['row']['y'];
	}
}