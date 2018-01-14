<?php
	session_start();


if (isset($_POST['userID']) && isset($_POST['password']) ) 
{
 
    $userID = $_POST['userID'];
    $password = $_POST['password'];
    $_SESSION["username"] = $userID;
    $_SESSION["password"] = $password;

  	if($userID == 'eval' & $password == 'eval')
  	{
  		header("Location: album.php");
  	
  	}

  	else
  {
  	echo "Oops.. wrong login";
  	echo "<html> <form>";
  	echo "<br> <input  action='action' type = 'button' value='BACK' onClick='history.go(-1);return true;'>";
  	echo " </form> </html>";
  }

}

?>



