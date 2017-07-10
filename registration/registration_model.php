<?php
/*
 * Include necessary files.
 */
include_once 'connect_db.php';

    
class registration_model{
    
    function addUser($userData) {
		$sql = "INSERT INTO user(FirstName, LastName, Phone, Username, Password, Email, Image) 
                VALUES ('".$userData['FirstName']."','".$userData['LastName']."','".$userData['Phone']."','".$userData['UserName']."','".$userData['Password']."','".$userData['Email']."','".$userData['Image']."')";
	 	mysql_query($sql);

		return mysql_affected_rows();
	}
}

?>