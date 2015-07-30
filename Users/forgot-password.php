<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//User has confirmed they want their password changed 
if(!empty($_GET["confirm"]))
{
	$token = trim($_GET["confirm"]);
	
	if($token == "" || !validateActivationToken($token,TRUE))
	{
		$errors[] = lang("FORGOTPASS_INVALID_TOKEN");
	}
	else
	{
		$rand_pass = getUniqueCode(15); //Get unique code
		$secure_pass = generateHash($rand_pass); //Generate random hash
		$userdetails = fetchUserDetails(NULL,$token); //Fetchs user details
		$mail = new userCakeMail();		
		
		//Setup our custom hooks
		$hooks = array(
			"searchStrs" => array("#GENERATED-PASS#","#USERNAME#"),
			"subjectStrs" => array($rand_pass,$userdetails["display_name"])
			);
		
		if(!$mail->newTemplateMsg("your-lost-password.txt",$hooks))
		{
			$errors[] = lang("MAIL_TEMPLATE_BUILD_ERROR");
		}
		else
		{	
			if(!$mail->sendMail($userdetails["email"],"Your new password"))
			{
				$errors[] = lang("MAIL_ERROR");
			}
			else
			{
				if(!updatePasswordFromToken($secure_pass,$token))
				{
					$errors[] = lang("SQL_ERROR");
				}
				else
				{	
					if(!flagLostPasswordRequest($userdetails["user_name"],0))
					{
						$errors[] = lang("SQL_ERROR");
					}
					else {
						$successes[]  = lang("FORGOTPASS_NEW_PASS_EMAIL");
					}
				}
			}
		}
	}
}

//User has denied this request
if(!empty($_GET["deny"]))
{
	$token = trim($_GET["deny"]);
	
	if($token == "" || !validateActivationToken($token,TRUE))
	{
		$errors[] = lang("FORGOTPASS_INVALID_TOKEN");
	}
	else
	{
		
		$userdetails = fetchUserDetails(NULL,$token);
		
		if(!flagLostPasswordRequest($userdetails["user_name"],0))
		{
			$errors[] = lang("SQL_ERROR");
		}
		else {
			$successes[] = lang("FORGOTPASS_REQUEST_CANNED");
		}
	}
}

//Forms posted
if(!empty($_POST))
{
	$email = $_POST["email"];
	$username = sanitize($_POST["username"]);
	
	//Perform some validation
	//Feel free to edit / change as required
	
	if(trim($email) == "")
	{
		$errors[] = lang("ACCOUNT_SPECIFY_EMAIL");
	}
	//Check to ensure email is in the correct format / in the db
	else if(!isValidEmail($email) || !emailExists($email))
	{
		$errors[] = lang("ACCOUNT_INVALID_EMAIL");
	}
	
	if(trim($username) == "")
	{
		$errors[] = lang("ACCOUNT_SPECIFY_USERNAME");
	}
	else if(!usernameExists($username))
	{
		$errors[] = lang("ACCOUNT_INVALID_USERNAME");
	}
	
	if(count($errors) == 0)
	{
		
		//Check that the username / email are associated to the same account
		if(!emailUsernameLinked($email,$username))
		{
			$errors[] =  lang("ACCOUNT_USER_OR_EMAIL_INVALID");
		}
		else
		{
			//Check if the user has any outstanding lost password requests
			$userdetails = fetchUserDetails($username);
			if($userdetails["lost_password_request"] == 1)
			{
				$errors[] = lang("FORGOTPASS_REQUEST_EXISTS");
			}
		else
		{
			$token = $userdetails["activation_token"];
			$rand_pass = getUniqueCode(15); //Get unique code
			$secure_pass = generateHash($rand_pass); //Generate random hash
			$userdetails = fetchUserDetails(NULL,$token); //Fetchs user details
			$mail = new userCakeMail();		

			//Setup our custom hooks
			$hooks = array(
			"searchStrs" => array("#GENERATED-PASS#","#USERNAME#"),
			"subjectStrs" => array($rand_pass,$userdetails["display_name"])
			);

			if(!$mail->newTemplateMsg("your-lost-password.txt",$hooks))
			{
			$errors[] = lang("MAIL_TEMPLATE_BUILD_ERROR");
			}
			else
			{	
			if(!$mail->sendMail($userdetails["email"],"Your new password"))
			{
			$errors[] = lang("MAIL_ERROR");
			}
			else
			{
			if(!updatePasswordFromToken($secure_pass,$token))
			{
			$errors[] = lang("SQL_ERROR");
			}
			else
			{	
			if(!flagLostPasswordRequest($userdetails["user_name"],0))
			{
			$errors[] = lang("SQL_ERROR");
			}
			else {
			$successes[]  = lang("FORGOTPASS_NEW_PASS_EMAIL");
			}
			}
			}
			}
			}
			
		}
	}
}


echo "
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0,maximum-scale=1'>
		
		<title>Johnson Financial</title>

<link rel='stylesheet' href='../CSS/lostPassword.css'>
<link rel='stylesheet' href='../Admin/ManagmentPortal/assets/css/font-awesome.min.css'>
</head>
<body>
";

echo resultBlock($errors,$successes);

echo "
<div class='site__container'>

 

      <form name='newLostPass' action='".$_SERVER['PHP_SELF']."' method='post' class='form form--login glass'>
	  <div class='titlebar'>Forgot Password</div>
	  <div class='grid__container'>
        <div class='form__field'>
          <label class='fontawesome-user' for='login__username'><span class='hidden'>Username</span></label>
          <input name='username' type='text' class='form__input' placeholder='Username' required>
        </div>

        <div class='form__field'>
          <label class='fa fa-envelope' for='login__password'><span class='hidden'>Password</span></label>
          <input name='email' type='text' class='form__input' placeholder='Email' required>
        </div>
	  </div>
  	 
      <div class='form__field onBottom'>
          <input type='submit' value='Request Password'>
		  <div class='bottombar'></div>
      </div>
	 
      </form>
</div>

</body>
</html>";

?>
