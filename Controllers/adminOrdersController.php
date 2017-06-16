<?php 

class adminOrdersController extends AdminBase
{	

	static public function actionIndex()
	{
		self::checkAdmin();

		$orders = Payment::getListOrders();

		require_once(ROOT.'/Views/Admin/Orders/index.php');
	}

	static public function actionRemoveOrder($id)
	{
		self::checkAdmin();

		$data = Payment::removeOrder($id);

		header('Location: /ad/orders');
	}	

	static public function actionEditOrder($id)
	{
		self::checkAdmin();

		$check = false;

		if(!empty($_POST))
		{
			$status = $_POST['status'];

			$check = Payment::editOrder($status, $id);
		}

		require_once(ROOT.'/Views/Admin/Orders/edit_order.php');

		if($check)
		{
			header('Location: /ad/orders');	
		}
		
	}	

}