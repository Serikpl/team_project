<?php

class adminUsersController extends AdminBase
{	

	static public function actionIndex()
	{
		self::checkAdmin();

		$users = User::getListUsers();

		require_once(ROOT.'/Views/Admin/Users/index.php');
	}

	static public function actionAddUser()
	{
		self::checkAdmin();

		$communicats = '';
		$name='';
		$email='';
		$password='';
		$user_type = 'user';
		$errors = false;
		$check = false;

		if(!empty($_POST))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$user_type = $_POST['user_type'];

			// check if email exist 
			$email_ex = User::checkEmailExist($email);
			if($email_ex)
			{	
				$errors[0] = 'This email already exists.';
			}

			if($errors == false)
			$check = User::registerUser($name, $email, $password, $user_type);

			if($check)
			{
				$communicats = "New user was registered!";
			}
		}
	
		require_once(ROOT.'/Views/Admin/Users/add_user.php');	
	
		if($check)
		{
			header('Location: /ad/users');	
		}
	}	

	static public function actionEditUser($id)
	{
		self::checkAdmin();

		$user = User::getOneUser($id);

		$name=$user['name'];
		$email=$user['email'];
		$password=$user['password'];
		$user_type = $user['user_type'];
		$check = false;
		$errors = false;
	
		if(!empty($_POST))
		{


			if(!empty($_POST['name']))
			{
				$name = $_POST['name'];
			}

			// if(!empty($_POST['email']))
			// {
			// 	$email_ex = User::checkEmailExist($email);
			// 	if($email_ex)
			// 	{	
			// 		$errors[0] = 'This email already exists.';
			// 	}
			// 	else
			// 	{
			// 		$email = $_POST['email'];	
			// 	}
				
			// }

			if(!empty($_POST['user_type']))
			{
				$user_type = $_POST['user_type'];
			}

			if(!empty($_POST['password']))
			{
				$password = $_POST['password'];
				$password = User::make_password_hash($password);
			}

			if($errors == false)
			$check = User::editUser($id, $name, $email, $password, $user_type);

			echo "<pre>";
			var_dump($errors);
			echo "</pre>";		

		}		

		require_once(ROOT.'/Views/Admin/Users/edit_user.php');	

		if($check)
		{
			header('Location: /ad/users');	
		}		
	
	}

	static public function actionRemoveUser($id)
	{
		self::checkAdmin();

		$data = User::removeUser($id);

		header('Location: /ad/users');
	}

}