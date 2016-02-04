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

class ProjectsHistoryCommand extends AbstractCommand
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
			'name' => 'Name',
			'plan' => 'Plan',
			'status' => 'Status',
			'days_left' => 'Days Left',
			'created_at' => 'Created',
			'updated_at' => 'Updated'
		);
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Symfony\Component\Console\Command\Command::execute()
	 */
	public function execute( InputInterface $input, OutputInterface $output )
	{
		parent::execute( $input, $output );
		$this->addOption( "project_ids", "pids", InputOption::VALUE_REQUIRED, "ITCloud Pivotal Tracker API v5. Comma seperated (int)s The IDs of the project." );
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
			$api = $this->getApi();

			$project_id = $this->getInput()->getOption( 'project_id' );
			$label = $this->getInput()->getOption( 'label' );
			$start_date = $this->getInput()->getOption( 'start_date' );
			$end_date = $this->getInput()->getOption( 'end_date' );

			$items = $api->getProjects( $project_id, $label, $start_date, $end_date );
			$rows = [];

			foreach( $items as $item )
			{
				$row = get_object_vars( $item );
				$rows[] = $row;
			}

			$this->setRows( $rows );
		}

		return $this->rows;
	}
}