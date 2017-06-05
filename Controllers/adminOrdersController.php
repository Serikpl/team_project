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

}