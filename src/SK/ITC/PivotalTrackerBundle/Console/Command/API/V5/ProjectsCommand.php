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

class ProjectsCommand extends AbstractCommand
{

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SK\ITCBundle\Command\TableCommand::getColumns() 'iteration_length'=>'',
	 *      [week_start_day] => Monday
	 *      [point_scale] => 0,1,2,3
	 *      [point_scale_is_custom] =>
	 *      [bugs_and_chores_are_estimatable] =>
	 *      [automatic_planning] => 1
	 *      [enable_tasks] => 1
	 *      [time_zone] => stdClass Object
	 *      (
	 *      [kind] => time_zone
	 *      [olson_name] => America/Los_Angeles
	 *      [offset] => -08:00
	 *      )
	 *
	 *      [velocity_averaged_over] => 3
	 *      [number_of_done_iterations_to_show] => 12
	 *      [has_google_domain] =>
	 *      [enable_incoming_emails] => 1
	 *      [initial_velocity] => 10
	 *      [public] => 1
	 *      [atom_enabled] =>
	 *
	 *
	 *      [account_id] => 856181
	 *      [current_iteration_number] => 1
	 *      [enable_following] => 1
	 */
	protected function getColumns()
	{
		return array(
			'id' => 'ID',
			'kind' => 'Kind',
			'name' => 'Name',
			'version' => 'Version',
			'project_type' => 'Type',
			'start_time' => 'Start',
			'created_at' => 'Created',
			'updated_at' => 'Update'
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
		$this->addOption( "project_ids", "pid", InputOption::VALUE_OPTIONAL, "ITCloud Pivotal Tracker API v5. (int) The ID of the project." );
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

			$project_ids = [];
			if( $this->getInput()->hasOption( 'project_ids' ) )
			{
				$project_ids = $this->getInput()->getOption( 'project_ids' );
			}

			$items = $api->getProjects( $project_ids );
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