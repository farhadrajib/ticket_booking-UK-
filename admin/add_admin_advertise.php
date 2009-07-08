<?php
require_once("../includes/database.php");
include('lib/caleder.php');
$message ="";

	if(isset($_POST))
	{
		extract($_POST);
		$upload = basename( $_FILES['upload']['name']);
	
	
		$sql  = "INSERT INTO admin_advertise values('','$title','$details','$upload','$start_date','$end_date','$status') ";
		$result = $db->query($sql);  
		if($result) 
						{
						$message = "successfully added";
						} 
		
		if ($result)
				{
					$message = "Added Successfully";
						$target = "advertise/"; 
						$target = $target . basename($_FILES['upload']['name']) ; 
						
						
						
						if(move_uploaded_file($_FILES['upload']['tmp_name'], $target)) 
						{
						$message = "The information is successfully update with file";
						} 
						else 
						{
						$error = "Sorry, there was a problem uploading your file.";
						}
					}
		
		
		
		
		
		
		
	
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/templates.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<script type="text/javascript" language="JavaScript1.2" src="menu/stmenu.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>ADVERTISE ADMIN</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script src="../lib/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.validate.js" type="text/javascript"></script>

<!-- for styling the form -->
<script src="../js/cmxforms.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
	$("#commentForm").validate();
});
</script>

<style type="text/css">
#commentForm { width: 100%; }
#commentForm label { width: 90%; }
#commentForm label.error, #commentForm input.submit { margin-left: 0px; }
</style>




<script type="text/javascript">
  // Start of the Web Editor 
 _editor_url = "htmlarea/"; 
 _editor_lang = "en"; 
</script>
<script type="text/javascript" src="htmlarea/htmlarea.js"></script>
<script type="text/javascript">
// load the plugin files
HTMLArea.loadPlugin("TableOperations");

var editor = null;
function initEditor() {
  // create an editor for the "ta" textbox
  editor = new HTMLArea("txt_details");

  // register the TableOperations plugin with our editor
  editor.registerPlugin(TableOperations);

  editor.generate();

  
  return false;
}
window.onload=initEditor;
// This is the END of Web Editor
</script>


<!-- InstanceEndEditable -->
</head>

<body>
<form class="cmxform" id="commentForm" name="commentForm" action="" method="post" enctype="multipart/form-data" >
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
 	<div class="login-white">
 	  <div class="login-white"><!-- InstanceBeginEditable name="editbody" -->
<form class="cmxform" id="commentForm" name="commentForm" action="" method="post" enctype="multipart/form-data" >
  <table width="350" border="0" align="center" cellpadding="1" cellspacing="3">
    <tr>
      <td colspan="3"><?php echo $message; ?>&nbsp;</td>
      </tr>
    <tr>
      <td>Title</td>
      <td colspan="2"><input type="text" name="title" id="title" /></td>
    </tr>
    <tr>
      <td width="116">Details</td>
      <td colspan="2"><textarea name="details" id="details"></textarea></td>
    </tr>
    <tr>
      <td>Image</td>
      <td colspan="2"><input name="upload" type="file" id="upload" /></td>
    </tr>
    <tr>
      <td>Start Date</td>
      <td colspan="2"><input name="start_date" type="text" class="required" id="start_date" size="12" readonly="true" onfocus="this.style.backgroundColor='#FFFFCC'" onblur="this.style.backgroundColor='#ffffff'" />
          <a href='javascript:void(0)' onclick='gfPop.fPopCalendar(document.commentForm.start_date);return false;' hidefocus="HIDEFOCUS"> <img src='lib/img/calander.jpeg' alt='lib/Calender' name='popcal' width='16' height='14' border='0' align='absbottom' id="popcal" /> </td>
    </tr>
    <tr>
      <td height="39">End Date</td>
      <td colspan="2"><input name="end_date" type="text" class="required" id="end_date" size="12" readonly="true" onfocus="this.style.backgroundColor='#FFFFCC'" onblur="this.style.backgroundColor='#ffffff'" />
          <a href='javascript:void(0)' onclick='gfPop.fPopCalendar(document.commentForm.end_date);return false;' hidefocus="HIDEFOCUS"> <img src='lib/img/calander.jpeg' alt='lib/Calender' name='popcal' width='16' height='14' border='0' align='absbottom' id="popcal" /> </td>
    </tr>
    <tr>
      <td>Status</td>
      <td width="91"><input name="status" type="radio" id="radio" value="1" checked="checked" />
        Published</td>
      <td width="125"><input type="radio" name="status" id="radio2" value="0" />
        Unpublished</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>
  </table>
<!-- InstanceEndEditable --></div>
</div>

</body>
<!-- InstanceEnd --></html>
