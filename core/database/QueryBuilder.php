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

	/**
     * Insert a record into a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        // die(var_dump($sql));

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            
        }
    }


	
}