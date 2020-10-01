<?php
	
	
session_start(); 
$error="";
if (isset($_POST['submit'])) 
{
	if (empty($_POST['username']) || empty($_POST['password'])) 
	{
		$error = "Username or Password is invalid";
	}
	else
	{
			$mongo = new MongoClient();

			$db = $mongo->project;

			$collection = $db->login;
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		$cursor=$collection->find(array("username" => $username,"password" => $password));
		if ($cursor->count(true) > 0) 
		{
			$_SESSION['login_user']=$username;
			header("location: insert.php"); 
		}
		else 
		{
			$error= "Username or Password is invalid";
		}
	}
}
?>