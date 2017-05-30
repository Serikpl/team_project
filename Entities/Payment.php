<?php

/**
*  Payment 
*/
class Payment
{
	
	public static function savePayment($customer_id, $amount, $time)
	{
		$pdo = Database::connect();

		// def 1 'Serhii', 'serikpl@ukr.net', 'root', 'admin', '2017-05-09' 
		$sql = "INSERT INTO transactions(id, customer_id, amount, time) value(?, ?, ?, ?)";
		
		$query = $pdo->prepare($sql);

		try{
			$check = $query->execute(array('', $customer_id, $amount, $time));
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}


		Database::disconnect();
	} 

}	


?>