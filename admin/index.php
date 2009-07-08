<?php 
	require_once("../includes/database.php");
	
	$message='';
	
	extract($_POST);
	
	if(isset($Login))
	{
	$sql="select * from admin where u_name='$username' AND password='$password'";
	$result=$database->query($sql);
	
	
	$data=$database->fetch_array($result);

	$username=$data['u_name'];
	
	if($username)
	{
        session_start();/**/	
	
		$_SESSION['username']=$data['username'];
		$_SESSION['password']=$data['password'];
		echo "<script>top.location=('front.php')</script>";
		
	   }
	
	
	else
		{
			$message="Invalid user name or password";
		}
		
	}	
				




?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="JavaScript1.2" src="menu/stmenu.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOG IN PAGE</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="" onsubmit="return from_validation();">
<div class="body_container">
 <div class="body-header-text">
 <div class="body-header-text_admin"> Admin Panel <img src="images/admin pc.jpg" /></div>
 </div>
	<div class="dhtml">
 </div>
<div class="login-white">
<br /><tr class="tilefront"><?php echo $message; ?></tr>
<br />

<table width="320" border="0" align="center" cellpadding="0" cellspacing="0" class="login-margin">
  <tr>
    <td width="3%"><img src="images/Untitled-1_r2_c3.jpg" width="18" height="16" /></td>
    <td width="36%" align="left" valign="top"><img src="images/Untitled-1_r2_c5.jpg" width="284" height="2" /></td>
    <td width="61%" align="left" valign="top"><img src="images/Untitled-1_r2_c6.jpg" width="18" height="16" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/Untitled-1_r4_c3.jpg" width="1" height="97" /></td>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="1">
      <tr>
        <td width="37%" align="right" valign="top" class="fontstyle">User name</td>
        <td width="63%" align="left" valign="top"><input type="text" name="username" id="username" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="fontstyle">password</td>
        <td align="left" valign="top"><input type="password" name="password" id="password" /></td>
      </tr>
      <tr>
        <td></td>
        <td><input name="Login" type="submit" class="submitbutton" id="Login" value="Login" /></td>
      </tr>
    </table></td>
    <td align="right" valign="top"><img src="images/Untitled-1_r4_c7.jpg" width="1" height="97" /></td>
  </tr>
  <tr>
    <td height="16" align="left" valign="bottom"><img src="images/Untitled-1_r5_c3.jpg" width="18" height="16" /></td>
    <td align="left" valign="bottom"><img src="images/Untitled-1_r6_c5.jpg" width="284" height="2" /></td>
    <td align="right" valign="bottom"><img src="images/Untitled-1_r5_c6.jpg" width="18" height="16" /></td>
  </tr>
</table>
</div>


</div>
</form>
</body>
</html>
