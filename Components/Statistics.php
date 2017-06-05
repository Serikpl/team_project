<?php 

/**
* Statistics
*/
class Statistics
{
	
	static public function getAmounts()
	{
		$pdo = Database::connect();

		$sql = "SELECT id,amount FROM orders";
		
		try{
			$query = $pdo->query($sql);
		} 
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

		$data = $query->fetchAll(PDO::FETCH_ASSOC);

		Database::disconnect();

		return $data;
	}

}

?>