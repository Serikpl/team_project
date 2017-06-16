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
		$recom_products = Product::get_recommended_products();

		$bs_id = array_rand($recom_products, 1);
		$bestsel_prod = $recom_products[$bs_id];

		$brand_bs = Brand::getOneBrand($bestsel_prod['brand_id']);

		require_once(ROOT.'/Views/Start/index.php');		
	}	

	static public function actionTest()
	{
		require_once(ROOT.'/Views/Static/for_tests.php');	
	}

}

?>