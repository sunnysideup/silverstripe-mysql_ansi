<?php
/**
 * MySQL connector class.
 * @package sapphire
 * @subpackage model
 */
class MySQLANSIDatabase extends MySQLDatabase{
	/**
	 * Connection to the DBMS.
	 * @var resource
	 */
	private $dbConn;

	/**
	 * True if we are connected to a database.
	 * @var boolean
	 */
	private $active;

	/**
	 * The name of the database.
	 * @var string
	 */
	private $database;

	/**
	 * Connect to a MySQL database.
	 * @param array $parameters An map of parameters, which should include:
	 *  - server: The server, eg, localhost
	 *  - username: The username to log on with
	 *  - password: The password to log on with
	 *  - database: The database to connect to
	 */
	public function __construct($parameters) {
 		parent::__construct($parameters);
 		$this->query("SET sql_mode = 'ANSI'");
	}

}
