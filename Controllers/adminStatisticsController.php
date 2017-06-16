<?php 

class adminStatisticsController extends AdminBase
{	

	static public function actionIndex()
	{
		self::checkAdmin();

		// $data = Statistics::getAmounts();
		require_once(ROOT.'/Views/Admin/Statistics/index.php');
	}

	static public function actionAmountsJSON()
	{
		$data = Statistics::getAmounts();

		$return_arr = array();

		foreach ($data as $row) {
       		$row_array['id_order'] = $row['id'];
            $row_array['amount'] = $row['amount'];

            array_push($return_arr,$row_array);
		}

        $return_arr = json_encode($return_arr);

        
	
        print_r($return_arr);
		// its not will be here, now for tests
		// require_once(ROOT.'/Views/Static/for_tests.php');

		return $return_arr;
	}

	static public function actionStat_2JSON()
	{
		$data = Statistics::getQuantity();

		$return_arr = array();

		foreach ($data as $row) {
       		$row_array['brand_name'] = $row['brand_name'];
            $row_array['quantity'] = $row['quantityInStock'];

            array_push($return_arr,$row_array);
		}

        $return_arr = json_encode($return_arr);

        
	
        print_r($return_arr);
		// its not will be here, now for tests
		// require_once(ROOT.'/Views/Static/for_tests.php');

		return $return_arr;
	}

}