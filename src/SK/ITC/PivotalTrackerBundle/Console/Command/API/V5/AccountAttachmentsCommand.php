<?php

/**
 * ITC Pivotal Tracker Bundle
 *
 * @copyright GNU GPL
 * @author Slavomir Kuzma <slavomir.kuzma@gmail.com>
 */
namespace SK\ITC\PivotalTrackerBundle\Console\Command\API\V5;

use SK\ITC\PivotalTrackerBundle\Console\Command\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class AccountAttachmentsCommand extends AbstractCommand
{
	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SK\ITCBundle\Command\TableCommand::getColumns()
	 */
	protected function getColumns()
	{
		return array(
			'kind' => 'Kind',
			'id' => 'ID',
			'person' => 'Person',
			'account_id' => 'Account ID',
			'created_at' => 'Created',
			'updated_at' => 'Updated',
			'owner'=>'Owner',
			'admin'=>'Admin',
			'project_creator'=>'Admin',
			'timekeeper'=>'Timekeeper',
			'time_enterer'=>'Time Enterer',
		);
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Symfony\Component\Console\Command\Command::configure()
	 */
	protected function configure()
	{
		parent::configure();

		$this->addOption( "limit", "l", InputOption::VALUE_REQUIRED, "The number of activity items you want returned." );
		$this->addOption( "offset", "o", InputOption::VALUE_REQUIRED, "Index of the first activity item you want, starting from zero." );
		$this->addOption( "occurred_before", "ob", InputOption::VALUE_REQUIRED, "Activity will be returned only for operations that occurred before the time specified by this parameter." );
		$this->addOption( "occurred_after", "oa", InputOption::VALUE_REQUIRED, "Activity will be returned only for operations that occurred after the time specified by this parameter." );
		$this->addOption( "sort_order", "so", InputOption::VALUE_REQUIRED, "The order to return the activity. Defaults to descending. Valid enumeration values: asc, desc" );
	}

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SK\ITCBundle\Command\TableCommand::getRows()
	 */
	protected function getRows()
	{
		if( NULL === $this->rows )
		{
			$limit = $this->getInput()->getOption( 'limit' );
			$offset = $this->getInput()->getOption( 'offset' );
			$occurredBefore = $this->getInput()->getOption( 'occurred_before' );
			$occurredAfter = $this->getInput()->getOption( 'occurred_after' );
			$sortOrder = $this->getInput()->getOption( 'sort_order' );

			$accounts = $this->getApi()->getAccountsActivity( $limit, $offset, $occurredBefore, $occurredAfter, $sortOrder);

			$rows = [];

			$this->setRows( $rows );
		}

		return $this->rows;
	}
}