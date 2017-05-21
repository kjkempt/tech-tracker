<!DOCTYPE html>

<body>



<?php

include("db_connect.php");

$UN = $_POST["username"];
$PW = $_POST["password"];


$sql = "SELECT LoginID, LoginPW FROM Client WHERE LoginID = '$UN' AND
		LoginPW = '$PW' ";
		
$result = mysql_query($sql);

if( mysql_num_rows($result)!=0 )
{
	echo "Login successful";
}
else
{
	echo "Login or password does not exist/does not match.";
}





include("db_disconnect.php");
?>
</body>
</html>