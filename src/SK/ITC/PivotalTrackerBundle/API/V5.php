<?php
/**
 * SK ITC Pivotal Tracker Bundle API
 *
 * @author Slavomir Kuzma <slavomir.kuzma@gmail.com>
 */
namespace SK\ITC\PivotalTrackerBundle\API;

use Guzzle\Http\Client;
use Monolog\Logger;

class V5
{

	/**
	 *
	 * @var Client
	 */
	private $client;

	/**
	 *
	 * @var Logger
	 */
	private $logger;

	/**
	 *
	 * @var string
	 */
	private $token;

	/**
	 *
	 * @var array
	 */
	private $headers;

	/**
	 *
	 * @param string $token
	 * @param Client $client
	 * @param Logger $logger
	 */
	public function __construct( $token, Client $client, Logger $logger )
	{
		$this->setToken( $token );
		$this->setClient( $client );
		$this->setLogger( $logger );
	}

	/**
	 *
	 * @return Client
	 */
	private function getClient()
	{
		return $this->client;
	}

	/**
	 *
	 * @param Client $client
	 */
	private function setClient( Client $client )
	{
		$this->client = $client;
		return $this;
	}

	/**
	 *
	 * @return Logger
	 */
	private function getLogger()
	{
		return $this->logger;
	}

	/**
	 *
	 * @param Logger $logger
	 */
	private function setLogger( Logger $logger )
	{
		$this->logger = $logger;
		return $this;
	}

	/**
	 *
	 * @return string
	 */
	private function getToken()
	{
		return $this->token;
	}

	/**
	 *
	 * @param string $token
	 */
	private function setToken( $token )
	{
		$this->token = $token;
		return $this;
	}

	public function getAccount( $accountId )
	{}

	public function getAccounts( $accountId = null )
	{
		return json_decode(
			$this->getClient()
				->get( '/services/v5/accounts/' . $accountId, $this->getHeaders() )
				->send()
				->getBody( true ) );
	}

	public function getAccountsSummaries( $accountId = null, $withPermission = null )
	{
		$headers = $this->getHeaders();
		$headers['query'] = [
			'with_permission' => $withPermission
		];

		return json_decode( $this->getClient()
			->get( '/services/v5/account_summaries', $headers )
			->send()
			->getBody( true ) );
	}

	public function getAccountsMemberships( $accountId )
	{
		return json_decode(
			$this->getClient()
				->get( '/services/v5/accounts/' . $accountId . '/memberships', $this->getHeaders() )
				->send()
				->getBody( true ) );
	}

	public function postAccountMemberships( $accountId )
	{}

	/**
	 *
	 * @param int $limit
	 * @param int $offset
	 * @param \DateTime $occurredBefore
	 * @param \DateTime $occurredAfter
	 * @param string $sortOrder
	 */
	public function getAccountsActivity( $limit = null, $offset = null, $occurredBefore = null, $occurredAfter = null, $sortOrder = null )
	{
		$headers = $this->getHeaders();
		$query = [];

		if( $limit !== null )
		{
			$query['limit'] = $limit;
		}

		if( $offset !== null )
		{
			$query['offset'] = $offset;
		}

		if( $occurredBefore !== null )
		{
			$query['occurred_before'] = $occurredBefore;
		}

		if( $occurredAfter !== null )
		{
			$query['occurred_after'] = $occurredAfter;
		}

		if( $sortOrder !== null )
		{
			$query['sort_order'] = $sortOrder;
		}

		if( count( $query ) > 0 )
		{
			$headers['query'] = $query;
		}

		return json_decode( $this->getClient()
			->get( '/services/v5/my/activity', $headers )
			->send()
			->getBody( true ) );
	}

	/**
	 *
	 * @return array
	 */
	private function getHeaders()
	{
		if( null === $this->headers )
		{
			$this->headers = [
				'X-TrackerToken' => $this->getToken(),
				'Content-Type' => 'application/json'
			];
		}
		return $this->headers;
	}

	/**
	 *
	 * @param array $headers
	 */
	private function setHeaders( array $headers )
	{
		$this->headers = $headers;
		return $this;
	}

	/**
	 *
	 * @param \stdClass $result
	 * @return array
	 */
	public static function __toRow( $result, $prefix = " ", $level = 0 )
	{
		if( is_object( $result ) )
		{
			$result = self::resultToArray( get_object_vars( $result ), $prefix, $level );
		}
		elseif( is_array( $result ) )
		{
			if( $level == 0 )
			{
				foreach( $result as $key => $value )
				{
					$result[$key] = self::resultToArray( $value, $prefix, $level + 1 );
				}
			}
			else
			{
				$result = implode( "\n",
					array_map(
						function ( $v, $k ) use ($prefix, $level )
						{
							$string = "";

							$string = str_repeat( $prefix, $level ) . $k . ' : ';
							$string .= self::resultToArray( $v, $prefix, $level + 1 );

							return $string;
						}, $result, array_keys( $result ) ) );
			}
		}

		return $result;
	}
}