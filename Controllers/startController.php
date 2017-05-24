<?php 

/**
* class startController
*/
class startController
{
	static public function actionIndex()
	{

		$products = array();
		$products = Product::get_list_products();
		$brands = Brand::getListBrands();
		$brand_selected = "";

		require_once(ROOT.'/Views/Start/index.php');		
	}	
}

 ?>