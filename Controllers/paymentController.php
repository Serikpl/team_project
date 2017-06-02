<?php 

/**
* payment Controller
*/
class paymentController{

	static public function actionMake_payment()
	{

		if(User::checkLogged())
		{
			$customer_id = User::loggedId();
			$amount = Cart::getTotalPrice();
			$time = date('Y-m-d G:i:s');

			Payment::savePayment($customer_id, $amount, $time);

			Cart::delAllProducts();

			// header('Location: /');	
			require_once(ROOT.'/Views/Static/payment_end.php');		
		}
		else
		{

			header('Location: /login');
		}


	}

}
		