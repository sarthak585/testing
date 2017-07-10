<?php
	/*
	* Include necessary files.
	*/
	//include_once('../config/config.php');
	include_once 'login_model.php';

	/*
	* Initialize objects.
	*/
	$error = '';
	$userModel = new login_model();

	// Prepare an array for insert and update.
	
    $user=$userModel->getUserByUsernameAndPassword($_POST['username'],$_POST['password']);

	// Redirect back to view.
	if ($user){
		session_start();
		$_SESSION['username']=$user['UserName'];
		$_SESSION['firstname']=$user['FirstName'];
		$_SESSION['lastname']=$user['LastName'];
		$_SESSION['isAuthenticated']=true;
		
		header('location: index.php');
	}
	else {
		$error = "Username or Password Invalid";
		header('location: registration_view.php?iserror=true');
	}	
?>