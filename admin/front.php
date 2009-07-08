<?php 
	
	
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
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<script type="text/javascript" language="JavaScript1.2" src="menu/stmenu.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>ADMIN HOME</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>
<form id="form1" name="form1" method="post" action="" onsubmit="return from_validation();">
<div class="body_container">
 <div class="body-header-text">
 <div class="body-header-text_admin"> Admin Panel <img src="images/admin pc.jpg" /></div>
 </div>
		<div class="dhtml">
<script type="text/javascript" language="JavaScript1.2">
<!--
stm_bm(["menu3bac",700,"menu","blank.gif",0,"","",0,0,250,0,1000,1,0,0,"","",0,0,1,1,"default","hand","menu/"],this);
stm_bp("p0",[0,4,0,0,0,3,0,7,100,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=reverse,enabled=0,Duration=1.00)",4,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=forward,enabled=0,Duration=1.00)",5,10,0,0,"#000000","#E2DDC0","",3,0,0,"#000066"]);
stm_ai("p0i0",[0,"Admin profile","","",-1,-1,0,"#","_self","","","","",0,0,0,"arrow_r.gif","arrow_r.gif",7,7,0,1,1,"#3399FF",0,"#3399FF",0,"","",3,3,0,0,"#3399FF","#FFFFFF","#FFFFFF","#000000","bold 8pt Arial","bold 8pt Arial",0,0],82,18);
stm_bpx("p1","p0",[1,4,0,0,0,3,0,0,100,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=reverse,enabled=0,Duration=1.00)",4,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=forward,enabled=0,Duration=1.00)",5,10,0,0,"#000000","#E2DDC0","",3,1,1]);
stm_aix("p1i0","p0i0",[0,"MANAGE","","",-1,-1,0,"mange_password.php","_self","","","","",0,0,0,"","",0,0],82,0);
stm_ep();
stm_aix("p0i1","p0i0",[0,"Admin Advertise"],82,18);
stm_bpx("p2","p1",[]);
stm_aix("p2i0","p1i0",[0,"ADD","","",-1,-1,0,"add_admin_advertise.php"],82,0);
stm_aix("p2i1","p1i0",[0,"MANAGE","","",-1,-1,0,"mange_admin_advertise.php"],82,0);
stm_ep();
stm_aix("p0i2","p0i0",[0,"User"],0,18);
stm_bpx("p3","p1",[]);
stm_aix("p3i0","p1i0",[0,"MANAGE","","",-1,-1,0,"view_user.php"],82,0);
stm_ep();
stm_aix("p0i3","p0i0",[0,"User Comments"],0,18);
stm_bpx("p4","p1",[]);
stm_aix("p4i0","p1i0",[0,"MANAGE","","",-1,-1,0,"user_comments.php"],82,0);
stm_ep();
stm_aix("p0i4","p0i0",[0,"Broker User","","",-1,-1,0,""],0,18);
stm_bpx("p5","p1",[]);
stm_aix("p5i0","p1i0",[0,"MANAGE","","",-1,-1,0,"view_broker_user.php"],82,0);
stm_ep();
stm_aix("p0i5","p0i0",[0,"Broker Adversie"],82,18);
stm_bpx("p6","p1",[]);
stm_aix("p6i0","p1i0",[0,"MANAGE","","",-1,-1,0,""],82,0);
stm_ep();
stm_aix("p0i6","p0i0",[0,"Event"],82,18);
stm_bpx("p7","p1",[]);
stm_aix("p7i0","p6i0",[0,"ADD"],82,0);
stm_aix("p7i1","p6i0",[],82,0);
stm_ep();
stm_aix("p0i7","p0i4",[0,"Ticket"],0,18);
stm_bpx("p8","p1",[]);
stm_aix("p8i0","p7i0",[],82,0);
stm_aix("p8i1","p6i0",[],82,0);
stm_ep();
stm_aix("p0i8","p0i4",[0,"Latest News"],0,18);
stm_bpx("p9","p1",[]);
stm_aix("p9i0","p1i0",[0,"ADD","","",-1,-1,0,"add_latest_news.php"],82,0);
stm_aix("p9i1","p1i0",[0,"MANAGE","","",-1,-1,0,"manage_latest_news"],82,0);
stm_ep();
stm_ep();
stm_em();
//-->
</script>




 </div>
<div class="login-white"><!-- InstanceBeginEditable name="editpage" -->
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td height="50" colspan="3" class="tilefront">ADMIN HOME</td>
    </tr>
    <tr>
      <td width="138" align="center" valign="top" bgcolor="#D4E6EA"><img src="images/home_48.png" width="48" height="48" /><br />
        <span class="tilelink"><a href="front.php" class="tilelink">Home</a></span></td>
      <td width="124" align="center" valign="top" bgcolor="#D4E6EA"><img src="images/newspaper_48.png" width="48" height="48" /><br />
        <span class="tilelink"><a href="manage_latest_news" class="tilelink">Latest News</a></span></td>
      <td width="116" align="center" valign="top" bgcolor="#D4E6EA"><img src="images/paper_content_pencil_48.png" width="48" height="48" /><br />
        <span class="tilelink"><a href="mange_admin_advertise.php" class="tilelink">Admin Advertise</a></span></td>
    </tr>
    <tr>
      <td align="center" valign="top" bgcolor="#D4E6EA"><img src="images/users_two_add_48.png" width="48" height="48" /><br />
        <span class="tilelink"><a href="view_broker_user.php" class="tilelink">Broker Users</a></span></td>
      <td align="center" valign="top" bgcolor="#D4E6EA"><img src="images/table_48.png" width="48" height="48" /><br />
        <span class="tilelink">Category</span></td>
      <td align="center" valign="top" bgcolor="#D4E6EA"><img src="images/speech_bubble_48.png" width="48" height="48" /><br />
        <span class="tilelink"><a href="user_comments.php" class="tilelink">User Comments</a></span></td>
    </tr>
    <tr>
      <td align="center" valign="top" bgcolor="#D4E6EA"><img src="images/star_48.png" width="48" height="48" />&nbsp;<br />
        <span class="tilelink">Broker Advertise</span><br /></td>
      <td align="center" valign="top" bgcolor="#D4E6EA"><img src="images/blinklist_48.png" width="48" height="48" /><br />
        <span class="tilelink">Events</span></td>
      <td align="center" valign="top" bgcolor="#D4E6EA"><img src="images/spanner_48.png" width="48" height="48" /><br />
        <a href="view_user.php" class="tilelink">Users</a></td>
    </tr>
  </table>
<!-- InstanceEndEditable --></div>


</div>

</body>
<!-- InstanceEnd --></html>
