<?php

/**
 * ITC Pivotal Tracker Bundle
 *
 * @copyright GNU GPL
 * @author Slavomir Kuzma <slavomir.kuzma@gmail.com>
 */
namespace SK\ITC\PivotalTrackerBundle\Console\Command;

use SK\ITC\PivotalTrackerBundle\API\V5;
use SK\ITCBundle\Command\TableCommand;
use Monolog\Logger;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractCommand extends TableCommand
{

	/**
	 *
	 * @var V5
	 */
	protected $api;

	/**
	 * Construct ITC Command Abstract
	 *
	 * @param string $name
	 * @param string $description
	 * @param V5 $api
	 */
	public function __construct( $name, $description, Logger $logger, V5 $api )
	{
		parent::__construct( $name, $description, $logger );
		$this->setApi( $api );
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SK\ITCBundle\Code\Generator\PHPUnit\AbstractGenerator::execute($input, $output)
	 */
	public function execute( InputInterface $input, OutputInterface $output )
	{
		parent::execute( $input, $output );
		$this->writeTable( 25 );
	}

	/**
	 *
	 * @return V5
	 */
	public function getApi()
	{
		return $this->api;
	}

	/**
	 *
	 * @param V5 $api
	 */
	public function setApi( V5 $api )
	{
		$this->api = $api;
		return $this;
	}
}