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
		echo "<script>top.location=('administrator.php')</script>";
		
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
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="" onsubmit="return from_validation();">
<div class="body_container">
 <div class="body-header-text">
 <div class="body-header-text_admin"> Admin Panel <img src="images/admin pc.jpg" /></div>
 </div>
	<div class="dhtml"><script type="text/javascript" language="JavaScript1.2">
<!--
stm_bm(["menu3bac",700,"menu","blank.gif",0,"","",0,0,250,0,1000,1,0,0,"","",0,0,1,1,"default","hand","menu/"],this);
stm_bp("p0",[0,4,0,0,0,3,0,7,100,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=reverse,enabled=0,Duration=1.00)",4,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=forward,enabled=0,Duration=1.00)",5,10,0,0,"#000000","#E2DDC0","",3,0,0,"#000066"]);
stm_ai("p0i0",[0,"User","","",-1,-1,0,"","_self","","","","",0,0,0,"arrow_r.gif","arrow_r.gif",7,7,0,1,1,"#3399FF",0,"#3399FF",0,"","",3,3,0,0,"#3399FF","#FFFFFF","#FFFFFF","#000000","bold 8pt Arial","bold 8pt Arial",0,0],0,18);
stm_bpx("p1","p0",[1,4,0,0,0,3,0,0,100,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=reverse,enabled=0,Duration=1.00)",4,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=forward,enabled=0,Duration=1.00)",5,10,0,0,"#000000","#E2DDC0","",3,1,1]);
stm_aix("p1i0","p0i0",[0,"ADD","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0],82,0);
stm_aix("p1i1","p1i0",[0,"MANAGE"],82,0);
stm_ep();
stm_aix("p0i1","p0i0",[0,"User Comments"],0,18);
stm_bpx("p2","p1",[]);
stm_aix("p2i0","p1i0",[],82,0);
stm_aix("p2i1","p1i1",[],82,0);
stm_ep();
stm_aix("p0i2","p0i0",[0,"Broker User"],0,18);
stm_bpx("p3","p1",[]);
stm_aix("p3i0","p1i0",[],82,0);
stm_aix("p3i1","p1i1",[],82,0);
stm_ep();
stm_aix("p0i3","p0i0",[0,"Broker Adversie","","",-1,-1,0,"#"],82,18);
stm_bpx("p4","p1",[]);
stm_aix("p4i0","p1i0",[],82,0);
stm_aix("p4i1","p1i1",[],82,0);
stm_ep();
stm_aix("p0i4","p0i3",[0,"Category"],82,18);
stm_bpx("p5","p1",[]);
stm_aix("p5i0","p1i0",[],82,0);
stm_aix("p5i1","p1i1",[],82,0);
stm_ep();
stm_aix("p0i5","p0i3",[0,"Event"],82,18);
stm_bpx("p6","p1",[]);
stm_aix("p6i0","p1i0",[],82,0);
stm_aix("p6i1","p1i1",[],82,0);
stm_ep();
stm_aix("p0i6","p0i0",[0,"Ticket"],0,18);
stm_bpx("p7","p1",[]);
stm_aix("p7i0","p1i0",[],82,0);
stm_aix("p7i1","p1i1",[],82,0);
stm_ep();
stm_aix("p0i7","p0i3",[0,"Admin Advertise"],82,18);
stm_bpx("p8","p1",[]);
stm_aix("p8i0","p1i0",[],82,0);
stm_aix("p8i1","p1i1",[],82,0);
stm_ep();
stm_aix("p0i8","p0i0",[0,"Latest News"],0,18);
stm_bpx("p9","p1",[]);
stm_aix("p9i0","p1i0",[],82,0);
stm_aix("p9i1","p1i1",[],82,0);
stm_ep();
stm_ep();
stm_em();
//-->
</script>
 </div>
<div class="login-white"><table width="320" border="0" align="center" cellpadding="0" cellspacing="0" class="login-margin">
  <tr>
    <td width="3%"><img src="images/Untitled-1_r2_c3.jpg" width="18" height="16" /></td>
    <td width="36%" align="left" valign="top"><img src="images/Untitled-1_r2_c5.jpg" width="284" height="2" /></td>
    <td width="61%" align="left" valign="top"><img src="images/Untitled-1_r2_c6.jpg" width="18" height="16" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="images/Untitled-1_r4_c3.jpg" width="1" height="97" /></td>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="1">
      <tr>
        <td width="37%" align="right" valign="top" class="login-text">User name</td>
        <td width="63%" align="left" valign="top"><input type="text" name="username" id="username" /></td>
      </tr>
      <tr>
        <td align="right" valign="top" class="login-text">password</td>
        <td align="left" valign="top"><input type="password" name="password" id="password" /></td>
      </tr>
      <tr>
        <td><?php echo $message; ?></td>
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
