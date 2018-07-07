<?php

/**
* 
*/
class QueryBuilder
{
	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}


	public function selectAll($table)
	{
		$starement = $this->pdo->prepare("SELECT * FROM {$table}");
		$starement->execute();

		$tasks = $starement->fetchAll(PDO::FETCH_CLASS);
		return $tasks;
	}


	
}