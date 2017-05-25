<?php


class staticController 
{

	static public function actionContact()
	{
		require_once(ROOT.'/Views/Static/contact.php');	
	}

	static public function actionAboutus()
	{
		require_once(ROOT.'/Views/Static/about.php');	
	}

}