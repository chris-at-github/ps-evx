<?php
namespace Ps\Evx\Domain\Repository;

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
 * The repository for Queues
 */
class QueueRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * @var array
	 */
	protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];

	/**
	 * @param array $options
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface|array
	 */
	public function findAll($options = []) {
		$query = $this->createQuery();
		$matches = [];

		if(isset($options['game']) === true) {
			$matches[] = $query->equals('game', $options['game']);
		}

		if(empty($matches) === false) {
			$query->matching($query->logicalAnd($matches));
		}

		return $query->execute();
	}
}
