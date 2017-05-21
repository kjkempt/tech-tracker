<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>


<form method="post" action="client_create_account.php"> 
    <fieldset id="billing">
        <legend>Create New Account</legend>
        <ul>
            <li> <label title="LoginID" for="LoginID">Login ID 
            <span>*</span></label> 
            <input type="text" name="LoginID" id="UserID" size="30" maxlength="30" 
            value="<?php 
            if(!empty($_SESSION["LoginID"]))
            {
            echo($_SESSION["LoginID"]);
            } 
            ?>" 
            /></li>
            
            
            <li> <label title="Passwd" for="Passwd">Password <span>*</span>
            </label> <input type="password" name="Passwd" id="Passwd" size="30" 
            maxlength="30" value="<?php if(!empty($_SESSION["Passwd"]))
            {echo($_SESSION["Passwd"]);} ?>" /></li>
            
            <li> <label title="PasswdConfirm" for="PasswdConfirm">Confirm Password 
            <span>*</span></label> <input type="password" name="PasswdConfirm" 
            id="PasswdConfirm" size="30" maxlength="30" value="<?php 
            if(!empty($_SESSION["PasswdConfirm"])){echo($_SESSION["PasswdConfirm"]);} ?>"
             /></li>
             
            <li> <label title="FirstName" for="FirstName">First Name <span>*</span></label> 
            <input type="text" name="FirstName" id="name" size="30" maxlength="30"
             value="<?php if(!empty($_SESSION["FirstName"])){echo($_SESSION["FirstName"]);} ?>" /></li>
             
             <li> <label title="LastName" for="LastName">Last Name <span>*</span></label> 
            <input type="text" name="LastName" id="name" size="30" maxlength="30"
             value="<?php if(!empty($_SESSION["LastName"])){echo($_SESSION["LastName"]);} ?>" /></li>
        </ul>
    </fieldset>
    <fieldset id="submit">
        <input id="SubmitBtn" name="SubmitBtn" type="submit" value="Create New Account" />
    </fieldset>
</form>

<div id="errorMsg"><?php 
if(!empty($_SESSION["errorMessage"]))
	{
	echo($_SESSION["errorMessage"]);
	} 
	?></div>




</body>
</html>