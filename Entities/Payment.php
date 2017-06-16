<?php

/**
*  Payment 
*/
class Payment
{
	
	public static function saveTransaction($customer_id, $amount, $time)
	{
		$pdo = Database::connect();

		// def 1 'Serhii', 'serikpl@ukr.net', 'root', 'admin', '2017-05-09' 
		$sql = "INSERT INTO transactions(id, customer_id, amount, time) value(?, ?, ?, ?)";
		
		$query = $pdo->prepare($sql);

		try{
			$check = $query->execute(array('', $customer_id, $amount, $time));
			$last_id = $pdo->lastInsertId();
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}


		Database::disconnect();
	
		return $last_id;
	} 

	public static function saveOrder($status, $customer_id, $time, $amount, $shippedDate, $trans_id)
	{

		$pdo = Database::connect();

		$sql = "INSERT INTO orders(id, status, customer_id, orderDate, amount, shippedDate,transaction_id) value(?, ?, ?, ?, ?, ?, ?)";
		
		$query = $pdo->prepare($sql);

		try{
			$check = $query->execute(array('', $status, $customer_id, $time, $amount, $shippedDate, $trans_id));
			$last_id = $pdo->lastInsertId();
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}

		Database::disconnect();

		return $last_id;

	}	

	public static function editOrder($status, $id)
	{
		$pdo = Database::connect();

		$sql = "UPDATE orders SET status = ?  WHERE id = ?";
		$query = $pdo->prepare($sql);

		try{
			$ch = $query->execute(array($status, $id));

			var_dump($ch);
		
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}	

		Database::disconnect();		

		return $ch;
	}

	public static function saveOrderDetails($order_id, $product_id, $quantity, $price, $brand_id)
	{

		$pdo = Database::connect();

		$sql = "INSERT INTO order_details(order_id, product_id, quantity, price, brand_id) value(?, ?, ?, ?, ?)";
		
		$query = $pdo->prepare($sql);

		try{
			$check = $query->execute(array($order_id, $product_id, $quantity, $price, $brand_id));
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}

		Database::disconnect();

		return true;

	}

	static public function getListOrders()
	{

		$pdo = Database::connect();

		$sql = "SELECT * FROM orders";
		
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

	static public function removeOrder($id)
	{
		$pdo = Database::connect();

		$sql = 'DELETE FROM orders WHERE id = ?';

		$query = $pdo->prepare($sql);

		$check = $query->execute(array($id));

		Database::disconnect();

		return $check;
	}

}	


?>