<?php 
/**
 * 
 */
public class DbConnection
{
	private $username
private $password;
private $dsn;
public $con;
	function __construct(argument)
	{
		$this.username='root';
		$this.password='';
		$this.dsn=='mysql:host=localhost;dbname=conference_data';
		$this.con= new PDO($dsn,$username,$password);
	}
}
?>