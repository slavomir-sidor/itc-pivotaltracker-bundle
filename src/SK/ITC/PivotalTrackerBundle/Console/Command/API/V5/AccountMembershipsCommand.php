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

class AccountMembershipsCommand extends AbstractCommand
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

		$this->addOption( "account_id", "aid", InputOption::VALUE_REQUIRED, "ITCloud Pivotal Tracker API v5 Account ID." );
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
			$accountId = $this->getInput()->getOption( 'account_id' );

			$accounts = $this->getApi()->getAccountsMemberships( $accountId );
			$rows = [];

			foreach( $accounts as $account )
			{
				$row = self::resultToArray($account);
				$rows[] = $row;
			}

			$this->setRows( $rows );
		}

		return $this->rows;
	}
}