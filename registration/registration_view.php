<?php
$doNotAuthenticate = true;
include_once "config.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>web/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>web/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>web/css/animate-custom.css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>web/css/admin_style.css" />
    </head>
    
    <body>
        <div class="container">
            <header>
                <h1>Login and Registration Form</h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper" class="login_wrapper">
                        <div id="login" class="animate form">
                            <?php
                            if (isset($_GET['iserror']) && $_GET['iserror']==true){
                                echo "Invalid Username or Password";
                            }
                            ?>
                            <form  method="post" action="<?php echo BASE_URL; ?>login.php" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
                    </div>
                    <div id="wrapper">
                        <div id="register" class="animate form">
                            <form  enctype="multipart/form-data" method="post" action="<?php echo BASE_URL; ?>registration.php" autocomplete="on"> 
                                <h1> Sign up </h1>
                                <table cellpadding="10" cellspacing="10" style="margin-left: 20%;">
                                    <tr>
                                        <td width="50%" class="signup_column_top">
                                            <table cellpadding="0" cellspacing="0" width="100%" style="margin: auto;">
                                                <tr>
                                                    <td width="30%">
                                                        <label for="firstname" class="firstname">First Name </label>
                                                    </td>
                                                    <td width="70%">
                                                        <input id="firstname" name="firstname" required="required" type="text" placeholder="First Name"/>
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
                                                    <input type="file" name="image">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                </td>
                                                <td width="50%">
                                                    <p class="signin button">
                                                        <input type="submit" value="Sign up" />
                                                    </p>
                                                </td> 
                                            </tr>
                                        </table>
                                       </td>
                                    </tr>
                                </table>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>