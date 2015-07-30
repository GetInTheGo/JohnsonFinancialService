<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){'Location: http://newsite.anpac.net';}

//Prevent the user visiting the logged in page if he/she is already logged in
if(isUserLoggedIn()) { header("Location: ../Admin/ManagmentPortal/AngularApp"); die(); }

//Forms posted
if(!empty($_POST))
{
	$errors = array();
	$username = sanitize(trim($_POST["username"]));
	$password = trim($_POST["password"]);
	
	//Perform some validation
	//Feel free to edit / change as required
	if($username == "")
	{
		$errors[] = lang("ACCOUNT_SPECIFY_USERNAME");
	}
	if($password == "")
	{
		$errors[] = lang("ACCOUNT_SPECIFY_PASSWORD");
	}

	if(count($errors) == 0)
	{
		//A security note here, never tell the user which credential was incorrect
		if(!usernameExists($username))
		{
			$errors[] = lang("ACCOUNT_USER_OR_PASS_INVALID");
		}
		else
		{
			$userdetails = fetchUserDetails($username);
			//See if the user's account is activated
			if($userdetails["active"]==0)
			{
				$errors[] = lang("ACCOUNT_INACTIVE");
			}
			else
			{
				//Hash the password and use the salt from the database to compare the password.
				$entered_pass = generateHash($password,$userdetails["password"]);
				
				if($entered_pass != $userdetails["password"])
				{
					//Again, we know the password is at fault here, but lets not give away the combination incase of someone bruteforcing
					$errors[] = lang("ACCOUNT_USER_OR_PASS_INVALID");
				}
				else
				{
					//Passwords match! we're good to go'
					
					//Construct a new logged in user object
					//Transfer some db data to the session object
					$loggedInUser = new loggedInUser();
					$loggedInUser->email = $userdetails["email"];
					$loggedInUser->user_id = $userdetails["id"];
					$loggedInUser->hash_pw = $userdetails["password"];
					$loggedInUser->title = $userdetails["title"];
					$loggedInUser->displayname = $userdetails["display_name"];
					$loggedInUser->username = $userdetails["user_name"];
					
					//Update last sign in
					$loggedInUser->updateLastSignIn();
					$_SESSION["userCakeUser"] = $loggedInUser;
					
					//Redirect to user account page
					header("Location: ../Admin/ManagmentPortal/AngularApp");
					die();
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

<link rel='stylesheet' href='../CSS/login.css'>
<link rel='stylesheet' href='../Admin/ManagmentPortal/assets/css/font-awesome.min.css'>
</head>
<body>
";

echo resultBlock($errors,$successes);

echo "



<div class='site__container'>

 

      <form name='login' action='".$_SERVER['PHP_SELF']."' method='post' class='form form--login glass'>
	  <div class='titlebar'>Agent Portal</div>
	  <div class='grid__container'>
        <div class='form__field'>
          <label class='fontawesome-user' for='login__username'><span class='hidden'>Username</span></label>
          <input name='username' type='text' class='form__input' placeholder='Username' required>
        </div>

        <div class='form__field'>
          <label class='fontawesome-lock' for='login__password'><span class='hidden'>Password</span></label>
          <input name='password' type='password' class='form__input' placeholder='Password' required>
        </div>
	  </div>
  	  <p class='text--center'><a href='forgot-password.php' class:'fpass'>Forgot Password?</a><span class='fa fa-wrench'></span></p>
      <div class='twrap'><p class='text--center'><a>Don't Have an Account </a><span class='fa fa-info'></span></p><div class='tooltip'>Contact your manager to have an account set up for you.</div></div>
	  <div class='form__field onBottom'>
          <input type='submit' value='Sign In'>
		  <div class='bottombar'></div>
      </div>
	 
      </form>
</div>

    

  


</body>
</html>";

?>
