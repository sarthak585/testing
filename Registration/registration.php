<?php
	/*
	* Include necessary files.
	*/
	include_once 'registration_model.php';

	/*
	* Initialize objects.
	*/
	$fileName = time()."_".basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],"web/images/".$fileName);

	$userModel = new registration_model();

	// Prepare an array for insert and update.
    $userData = array('FirstName' =>$_POST['firstname'],'LastName' =>$_POST['lastname'],'Phone' =>$_POST['phone'],'UserName' =>$_POST['usernamesignup'],'Password' =>$_POST['passwordsignup'],'Email' =>$_POST['emailsignup'],'Image' => $fileName);
    

	$userModel->addUser($userData);
	
	// Redirect back to view.
	header('location: registration_view.php');
?>