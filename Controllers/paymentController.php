<?php 

/**
* payment Controller
*/
class paymentController{

	static public function actionMake_payment()
	{
		$customer_id = User::loggedId();
		$amount = Cart::getTotalPrice();
		$time = '2017-05-30';

		Payment::savePayment($customer_id, $amount, $time);

		header('Location: /');
	}

}
		