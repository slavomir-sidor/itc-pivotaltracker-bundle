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

class AccountsSummariesCommand extends AbstractCommand
{

	private $withPemission = array(
		'none',
		'project_creation',
		'time_keeping',
		'time_entering',
		'administration'
	);

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
			'name' => 'Name',
			'plan' => 'Plan',
			'status' => 'Status',
			'days_left' => 'Days Left'
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
		$this->addOption( "with_permission", "wp", InputOption::VALUE_REQUIRED,
			"ITCloud Pivotal Tracker API v5 find accounts where you have the specified permission:none, project_creation, time_keeping, time_entering, administration" );
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
			$withPermission = $this->getInput()->getOption( 'with_permission' );
			if( in_array( $withPermission, $this->withPemission ) )
			{
				throw new \RuntimeException( 'Option \'with_permission\' has to be on of ' . implode( ",", $this->withPemission ) );
			}

			$accounts = $this->getApi()->getAccountsSummaries( $accountId, $withPermission );
			$rows = [];

			foreach( $accounts as $account )
			{
				$row = get_object_vars( $account );
				$rows[] = $row;
			}

			$this->setRows( $rows );
		}

		return $this->rows;
	}
}