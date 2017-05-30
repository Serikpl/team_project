<?php 

/**
* user Controller
*/
class userController{

	static public function actionLogin()
	{

		$email='';
		$password='';
		$logined = false;

		if(isset($_POST['submit']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];

			// make method to check validate Name, Email, Password
			
			// array $errors[] 
			$errors = false;

			// check if email exist 
			$user_id = User::checkUserExist($email, $password);

			if($user_id == false)
			{	
				$errors[0] = "Not correct data!";
			}
			else
			{
				$logined = 'Logined!';
			}

			if($errors == false)
			User::loginUser($user_id);

		}

		require_once(ROOT.'/Views/User/login.php');

		return true;

	}

    public function actionLogout()
    {

    	User::LogOutUser();
        header("Location: /");
    }
	
	static public function actionRegister()
	{

		$name='';
		$email='';
		$password='';

		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$group = 'user';
			
			// $today = getdate();

// make method to check validate Name, Email, Password
			
			// array $errors[] 
			$errors = false;

			// check if email exist 
			$email_ex = User::checkEmailExist($email);

			if($email_ex)
			{	
				$errors[0] = 'This email already exists.';
			}

			if($errors == false)
			User::registerUser($name, $email, $password);

		}

		require_once(ROOT.'/Views/User/register.php');

		return true;

	}
}

?>