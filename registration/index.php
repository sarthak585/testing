<?php
include_once 'config.php';
?>
<html>
	<head>
		<title>User Login</title>	
		<link rel="stylesheet" href="web/css/admin_style.css" />
	</head>	
<body>
	<?php
        include_once 'header.php';
	?>		
	<div class="content" id="welcome"> 
		<h1>Welcome <?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'];?></h1>
	</div>
	<table cellpadding="10" cellspacing="10" style="margin-left: 20%;">
	    <tr>
	        <td width="50%" class="signup_column_top">
	            <table cellpadding="0" cellspacing="0" width="100%" style="margin: auto;">
	                <tr>
	                    <td width="30%">
	                        <label for="firstname" class="firstname">First Name </label>
	                    </td>
	                    <td width="70%">
	                        <?php
	                        	echo $_SESSION['firstname'];
	                        ?>
	                    </td>
	                </tr>
	                <tr>        
	                    <td width="30%">
	                        <label for="lastname" class="lastname" >Last Name </label>
	                    </td>
	                    <td width="70%">
	                        <input id="lastname" name="lastname" required="required" type="text" placeholder="Last Name"/>
	                    </td>
	                </tr>        
	                <tr>
	                    <td width="30%">
	                        <label for="emailsignup" class="youmail">Your email </label>
	                    </td>
	                    <td width="70%">
	                        <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
	                    </td>
	                </tr>
	                <tr>    
	                    <td width="30%">    
	                        <label for="phone" class="phone">Phone Number </label>
	                    </td>
	                    <td width="70%">
	                        <input id="phone" name="phone" required="required" type="text" placeholder="Phone Number"/>                                          
	                    </td>
	                </tr>
	            </table>
	       </td>
	        <td width="50%">
	        	<table cellpadding="0" cellspacing="0" width="100%">
	            <tr>
	                <td width="30%">
	                    <label for="usernamesignup" class="uname">User Name </label>
	                </td>
	                <td width="70%">    
	                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
	                </td>
	            </tr>     
	            <tr>
	                <td width="30%">
	                    <label for="passwordsignup" class="youpasswd">Password </label>
	                </td>
	                <td width="70%">
	                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
	                </td>
	            </tr>    
	            <tr>
	                <td width="30%">
	                    <label for="passwordsignup_confirm" class="youpasswd">Confirm Password </label>
	                </td>
	                <td width="70%">    
	                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
	                </td>    
	            </tr>
	            <tr>
	                <td width="30%">
	                    <label>Set your Avtar </label>
	                </td>
	                <td>
	                    <img src="web/images/logo/camera.png"  alt="#"  type="file" height="70" width="70">
	                </td>
	            </tr>
	        </table>
	       </td>
	    </tr>
	</table>

</body>
</html>