<?php 

/**
* User class
*/
class User
{

	public static function loginUser($id)
	{
		$_SESSION['user'] = $id;
	}	

	public static function logOutUser()
	{
		unset($_SESSION['user']);
	}

	public static function checkLogged()
    {

        if (isset($_SESSION['user'])) {
            return true;
        }

    }
	
	public static function loggedId()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }    	
    }

	public static function registerUser($name, $email, $password)
	{

		// change it
		$register_date = "2017-05-29";
		$user_type = "user";

		$pdo = Database::connect();

		// def 1 'Serhii', 'serikpl@ukr.net', 'root', 'admin', '2017-05-09' 
		$sql = "INSERT INTO users(id, name, email, password, user_type, register_date) value(?, ?, ?, ?, ?, ?)";
		
		$query = $pdo->prepare($sql);

		try{
			$check = $query->execute(array('', $name, $email, $password, $user_type, $register_date));
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}


		Database::disconnect();

	}

	public static function checkEmailExist($email)
	{

		$pdo = Database::connect();

		// literowka byla: bylo emial, musi byc email 
		$sql = 'SELECT COUNT(*) FROM users WHERE email = ?';
		$query = $pdo->prepare($sql);		
		// $query->bindParam(':email', $email, PDO::PARAM_STR);
		// $query->execute();

		try{
			$query->execute(array($email));
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}

		// not fetch() not fetchAll(PDO::FETCH_ASSOC);
		$data = $query->fetchColumn();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		Database::disconnect();

		$result = "";		

		if ($data) 
		{
			// exist
			$result = true;
		}
		else
		{
			// not exist
			$result = false;	
		}

		return $result;
	}	

	public static function checkUserExist($email, $password)
	{

		$pdo = Database::connect();

		// literowka byla: bylo emial, musi byc email 
		$sql = 'SELECT * FROM users WHERE email = ? AND password = ?';
		$query = $pdo->prepare($sql);		
		// $query->bindParam(':email', $email, PDO::PARAM_STR);
		// $query->execute();

		try{
			$query->execute(array($email, $password));
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}

		// fetchAll(PDO::FETCH_ASSOC)/fetchAll(PDO::FETCH_NUM)
		$user = $query->fetch(PDO::FETCH_ASSOC);
		// echo "<pre>";
		// var_dump($user);
		// echo "</pre>";

		Database::disconnect();

		$result = "";		

		if ($user) 
		{
			// exist and return ID
			return $user['id'];
		}

		return false;
	}

}

?>		