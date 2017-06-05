<?php 

/**
* payment Controller
*/
class paymentController{

	static public function actionMake_payment()
	{

		$errors = false;

		if(User::checkLogged())
		{
			$customer_id = User::loggedId();
			$amount = Cart::getTotalPrice();
			$time = date('Y-m-d G:i:s');
			$status = 'new (undelivered)';
			$shippedDate = NULL;

			$products = Cart::getProducts();

			if($amount > 0)
			{
				$trans_id = Payment::saveTransaction($customer_id, $amount, $time);
				$order_id = Payment::saveOrder($status, $customer_id, $time, $amount, $shippedDate, $trans_id);
				
				foreach ($products as $row)
				{
					$product_id = $row['productCode'];
					$quantity = $row['quantity'];
					$price = $row['buyPrice'];
					$brand_id = $row['brand_id'];

					Payment::saveOrderDetails($order_id, $product_id, $quantity, $price, $brand_id);
				}

				require_once(ROOT.'/Views/Static/payment_end.php');

				// tamplate for tests
				// require_once(ROOT.'/Views/Static/for_tests.php');	

				Cart::delAllProducts();

			}
			else
			{
				$errors = "Nothing added to cart!";

			}

			// header('Location: /');	
				
		}
		else
		{

			header('Location: /login');
		}


	}

}
		