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

	static public function getQuantity()
	{
		$pdo = Database::connect();

		$sql = "SELECT quantityInStock ,brand_name FROM products INNER JOIN brands ON products.brand_id = brands.id
		GROUP BY brands.brand_name";
		
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
//
}

?>