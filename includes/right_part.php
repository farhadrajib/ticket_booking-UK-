<?php
//
require_once("includes/database.php");


 


$sql_advertise= "SELECT * FROM admin_advertise ORDER BY id DESC limit 2";
$result_advertise = mysql_query($sql_advertise);

	
	$message='';
	
	extract($_POST);
	
	if(isset($UserLogin))
	{
	$sql="select * from user where username='$username' AND password='$password'";
	$result=$database->query($sql);
	
	
	$data=$database->fetch_array($result);

	$username=$data['name'];
	
	if($username)
	{
        	
		
		$_SESSION['name']=$data['name'];
		$_SESSION['uid']=$data['u_id'];
	    
		
		echo "<script>top.location=('user_home.php');</script>";
	   }
	
	
	else
		{
			$message="Invalid user name or password";
		}
		
	}	
				


	$message2='';
	
	extract($_POST);
	
	if(isset($brokerLogin))
	{
	$sql="select * from broker_user where b_user_name ='$username' AND b_password ='$password'";
	$result=$database->query($sql);
	
	
	$data=$database->fetch_array($result);

	$id =$data['id '];
	
	if($id )
	{
        	
		
		$_SESSION['brokername']=$data['b_user_name'];
		$_SESSION['brokerid']=$data['id'];
	    
		
		echo "<script>top.location=('user_home.php');</script>";
	   }
	
	
	else
		{
			$message2="Invalid user name or password";
		}
		
	}	
				





                          
 ?>

<!--right part start -->
				<div id="right" >
					
					<!--view project part -->
						<div id="rightRight">
							<!--<p class="view">
							View more
							<span>Projects</span>
							</p>-->
                            <h2 class="more">Member Login</h2>
					<div class="login">
						<form name="memberlogin" action="" method="post" class="memberlogin">
                        User Name :
                        <input type="text" name="username" size="18" />
                        Password :
                        <input type="password" name="password" size="18" id="password" />
                        <input type="submit" name="UserLogin" value="Login" class="submit" id="Login" />
                        </form>
                      <form name="membersingup" action="user_registration.php" method="post" class="memberlogin">
                        <input type="submit" name="Login" value="Sign Up" class="signup" id="Login" />
					  </form>
					</div>
                    <h2 class="more">Broker Login</h2>
                    <div class="login">
						<form name="brokerlogin" action="" method="post" class="memberlogin">
                        User Name :
                        <input type="text" name="username" size="18" />
                        Password :
                        <input name="password" type="text" id="password" size="18" />
                        <input type="submit" name="brokerLogin" value="Login" class="submit" />
                        </form>
                        <form name="brokersingup" action="" method="post" class="memberlogin">
                        <input type="submit" name="Submit3" value="Sign Up" class="signup" />
						</form>
					</div>
							
							<h2 class="date1">Advertisement</h2>
							<div class="advertise">
									<?php
                      while ($retrive = @mysql_fetch_array ($result_advertise))
	                  {
                      ?>
                      <img src="admin/advertise/<?php echo $retrive['image_path'];   ?>" width="127" border="1px;"  height="117" class="style1"  style="padding-bottom:10px;"  /></br>
	<?php }?>
									
						  </div>
								
						</div>
					<!--view project end -->
					<!--what more start -->
						
 <!--what more end -->
					<br class="spacer" />
				</div>