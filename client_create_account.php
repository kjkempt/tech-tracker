<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

include("db_connect.php");


$LoginID = $_POST["LoginID"];
$PW = $_POST["Passwd"];
//echo $_POST["PasswdConfirm"];
$FN = $_POST["FirstName"];
$LN = $_POST["LastName"];



	if(empty($_POST["LoginID"]) || empty($_POST["FirstName"])|| empty($_POST["LastName"]) 
	|| empty($_POST["Passwd"])) 
	{
		$_SESSION["errorMessage"] = "One or more fields were empty";
		header("Location:client_new_account.php");
		exit;	
	}	

	$sql = "SELECT LoginID FROM Client WHERE LoginID = '$LoginID' ";

	$result = mysql_query($sql);
	
	if (mysql_num_rows($result)==0)
	{
	$sql = "INSERT INTO `Client` (`FirstName`, `LastName`, `LoginID`, `LoginPW`)
	VALUES ( '$FN', '$LN', '$LoginID', '$PW' )";
	
	$result = mysql_query($sql);
	
	}
	else 
	{
		$_SESSION["errorMessage"]= "Login ID is already taken. Try again please.";
		header("Location:client_new_account.php");
		exit;
		
		
	}
	
	;

	
	
	
	include("db_disconnect.php");
	
	
	header("Location:client_login.html");

?>


</body>
</html>