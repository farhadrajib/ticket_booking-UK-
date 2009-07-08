<?php
	require_once("../includes/database.php");
	$id =$_GET['u_id'];
	
	echo $sqldelete ="DELETE FROM user WHERE u_id='$id'";
	$delete = mysql_query($sqldelete);
	
	 echo "<script>top.location = 'view_user.php'</script>"; 
?>
