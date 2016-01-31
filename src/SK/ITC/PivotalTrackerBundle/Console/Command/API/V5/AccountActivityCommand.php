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

class AccountActivityCommand extends AbstractCommand
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
			'guid' => 'GUID',
			'project_version' => 'Project Version',
			'message' => 'Message',
			'highlight' => 'Hightlight',
			'changes' => 'Changes',
			'primary_resources' => 'Primary Resourcesr',
			'project' => 'Project',
			'performed_by' => 'Performed By',
			'occurred_at' => 'Occurred At'
		);
	}

	protected function getOptions()
	{
		return array(
			new InputOption( "limit", "l", InputOption::VALUE_REQUIRED, "The number of activity items you want returned." ),
			new InputOption( "offset", "o", InputOption::VALUE_REQUIRED, "Index of the first activity item you want, starting from zero." ),
			new InputOption( "occurred_before", "ob", InputOption::VALUE_REQUIRED,
				"Activity will be returned only for operations that occurred before the time specified by this parameter." ),
			new InputOption( "occurred_after", "oa", InputOption::VALUE_REQUIRED,
				"Activity will be returned only for operations that occurred after the time specified by this parameter." ),
			new InputOption( "sort_order", "so", InputOption::VALUE_REQUIRED,
				"The order to return the activity. Defaults to descending. Valid enumeration values: asc, desc" )
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

		$this->getDefinition()->addOptions( $this->getOptions() );
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
			$accounts = $this->getApi()->getAccountsActivity( $limit, $offset, $occurredBefore, $occurredAfter, $sortOrder );
			$rows = [];

			foreach( $accounts as $account )
			{
				$row = self::resultToArray( $account );
				$rows[] = $row;
			}

			$this->setRows( $rows );
		}

		return $this->rows;
	}
}