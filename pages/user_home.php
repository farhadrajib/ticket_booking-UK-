<?php
 

extract($_POST);
	$u_id=$_SESSION['uid'];
	if(isset($update))
	{
	  $sql="UPDATE user SET name='$name', email='$mail',address='$address',phone='$phone',username='$username',password='$password',status='$status' WHERE  u_id='$u_id'";
		$result1=mysql_query($sql);
		echo "<script>top.location=('user_home.php')</script>";
	}



$sql_retrive = "SELECT * FROM user WHERE  u_id='$u_id'";
					$result = $database->query($sql_retrive);
					
					$array = @mysql_fetch_array ($result);
					
						$b_name=$array['name'];
						$b_address=$array['address'];
						$b_email=$array['email'];
						$b_phone=$array['phone'];
						$b_user_name=$array['username'];
						$b_password=$array['password'];
						
					

?>


<div id="rightmid">
	
    <form id="form1" name="form1" method="post" action="">
    <table width="350" border="0" align="center" cellpadding="1" cellspacing="3">
      <tr>
        <td colspan="2" ><h2 class="h2" >MANAGE PROFILE</h2></td>
      </tr>
      <tr>
        <td width="126" class="style1 txt1"><strong>Name</strong></td>
        <td width="211"><input name="name" type="text" class="memberlogin" id="name" value="<?php echo $b_name; ?>"  /></td>
      </tr>
      <tr>
        <td class="style1 txt1"><strong>Address</strong></td>
        <td><input name="address" type="text" class="memberlogin" id="address" value="<?php echo $b_address; ?>"  /></td>
      </tr>
      <tr>
        <td class="style1 txt1"><strong>E-mail</strong></td>
        <td><input name="mail" type="text" class="memberlogin" id="mail" value="<?php echo $b_email; ?>" /></td>
      </tr>
      <tr>
        <td class="style1 txt1"><strong>Phone</strong></td>
        <td><input name="phone" type="text" class="memberlogin" id="phone" value="<?php echo $b_phone; ?>" /></td>
      </tr>
      <tr>
        <td class="style1 txt1"><strong>User name</strong></td>
        <td><input name="username" type="text" class="memberlogin" id="username" value="<?php echo $b_user_name; ?>"  /></td>
      </tr>
      <tr>
        <td class="style1 txt1"><strong class="style1">Password</strong></td>
        <td><input name="password" type="text" class="memberlogin" id="password"  value="<?php echo $b_password; ?>"  /></td>
      </tr>
      <tr>
        <td class="txt1">&nbsp;</td>
        <td><input type="submit" name="update" id="update" value="update" /></td>
      </tr>
    </table>
    </form>
	<?php 
		//session_destroy();

	?>
</div>