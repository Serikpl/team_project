<?php 

/**
* class Brand
*/
class Brand 
{
	
	public static function getListBrands()
	{

		$pdo = Database::connect();

		$sql = "SELECT * FROM brands";
		$data = $pdo->query($sql);

		// $data = $data->fetchAll(PDO::FETCH_ASSOC);

		Database::disconnect();

		return $data;

	}

	public static function getOneBrand($id)
	{
		$pdo = Database::connect();

		$sql = "SELECT * FROM brands WHERE id = ?";		
		$query = $pdo->prepare($sql);

		try{
			$query->execute(array($id));
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}
	
		$data = $query->fetch(PDO::FETCH_ASSOC);

		Database::disconnect();

		return $data;
	}

	public static function addNewBrand($name_new_brand)
	{

		$pdo = Database::connect();
		$sql = "INSERT INTO brands(id, brand_name) value(?,?)";

		$query = $pdo->prepare($sql);

		try{
			$result = $query->execute(array("",$name_new_brand));
		} catch(PDOExeption $e)
		{
			echo $e->getMessage();
		}

		Database::disconnect();

		return $result;

	}

	public static function removeBrand($id)
	{
		
		$pdo = Database::connect();

		$sql = 'DELETE FROM brands WHERE id = ?';

		$query = $pdo->prepare($sql);

		$check = $query->execute(array($id));

		Database::disconnect();

		return $check;

	}

}