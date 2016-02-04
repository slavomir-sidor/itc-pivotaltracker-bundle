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

class StoryTaskCommand extends AbstractCommand
{

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SK\ITCBundle\Command\TableCommand::getColumns() [owned_by_id] => 1880066
	 *      [url] => https://www.pivotaltracker.com/story/show/112731805
	 *      [project_id] => 1526277
	 *      [owner_ids] => Array
	 *      (
	 *      [0] => 1880066
	 *      )
	 *
	 *      [labels] => Array
	 *      (
	 *      [0] => stdClass Object
	 *      (
	 *      [id] => 13929363
	 *      [project_id] => 1526277
	 *      [kind] => label
	 *      [name] => roadmap
	 *      [created_at] => 2016-01-30T13:12:05Z
	 *      [updated_at] => 2016-01-30T13:12:05Z
	 *      )
	 *
	 *      )
	 */
	protected function getColumns()
	{
		return array(
			'kind' => 'Kind',
			'id' => 'ID',
			'created_at' => 'Created',
			'updated_at' => 'Updated',
			'story_type' => 'Type',
			'name' => 'Name',
			'description' => 'Description',
			'current_state' => 'State',
			'current_state' => 'State',
			'requested_by_id' => 'Requester'
		);
	}

	protected function configure()
	{
		parent::configure();

		$this->addOption( "project_id", "pid", InputOption::VALUE_REQUIRED, "ITCloud Pivotal Tracker API v5. The ID of the project." );
		$this->addOption( "story_id", "sid", InputOption::VALUE_REQUIRED, "ITCloud Pivotal Tracker API v5. The ID of the story." );
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Symfony\Component\Console\Command\Command::execute() with_label string in the request query.
	 *      — A label name which all returned stories must match.
	 *
	 *      with_story_type enumerated string in the request query.
	 *      — A story's type which all returned stories must match.
	 *      Valid enumeration values: feature, bug, chore, release
	 *
	 *      with_state enumerated string in the request query.
	 *      — A story's current_state which all returned stories must match.
	 *      Valid enumeration values: accepted, delivered, finished, started, rejected, planned, unstarted, unscheduled
	 *
	 *      after_story_id int in the request query.
	 *      — Filters results to stories that are after the given story id
	 *
	 *      before_story_id int in the request query.
	 *      — Filters results to stories that are before the given story id
	 *
	 *      accepted_before datetime in the request query.
	 *      — A date and time (ISO 8601 format or milliseconds) which all returned stories are accepted before.
	 *
	 *      accepted_after datetime in the request query.
	 *      — A date and time (ISO 8601 format or milliseconds) which all returned stories are accepted after.
	 *
	 *      created_before datetime in the request query.
	 *      — A date and time (ISO 8601 format or milliseconds) which all returned stories are created before.
	 *
	 *      created_after datetime in the request query.
	 *      — A date and time (ISO 8601 format or milliseconds) which all returned stories are created after.
	 *
	 *      updated_before datetime in the request query.
	 *      — A date and time (ISO 8601 format or milliseconds) which all returned stories are updated before.
	 *
	 *      updated_after datetime in the request query.
	 *      — A date and time (ISO 8601 format or milliseconds) which all returned stories are updated after.
	 *
	 *      deadline_before datetime in the request query.
	 *      — A date and time (ISO 8601 format or milliseconds) that release dates fall before.
	 *
	 *      deadline_after datetime in the request query.
	 *      — A date and time (ISO 8601 format or milliseconds) that release dates fall after.
	 *
	 *      limit int in the request query.
	 *      — The number of stories you want returned.
	 *
	 *      offset int in the request query.
	 *      — With the first story in your priority list as 0, the index of the first story you want returned.
	 *
	 *      filter string in the request query.
	 *      — This parameter supplies a search string; only stories that match the search criteria are returned. Cannot be used together with any
	 *      other parameters. How can a search be refined?
	 */
	public function execute( InputInterface $input, OutputInterface $output )
	{
		parent::execute( $input, $output );
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
			$story_id = $this->getInput()->getOption( 'story_id' );

			// $start_date = $this->getInput()->getOption( 'start_date' );
			// $end_date = $this->getInput()->getOption( 'end_date' );

			$items = $api->getStory($project_id, $story_id);
			$rows = [];

			foreach( $items as $item )
			{
				// requested_by_id
				$row = get_object_vars( $item );
				$rows[] = $row;
			}

			$this->setRows( $rows );
		}

		return $this->rows;
	}
}