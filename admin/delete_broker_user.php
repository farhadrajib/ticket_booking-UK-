<?php
	require_once("../includes/database.php");
	$id=$_GET['id'];
	echo $id;
	
	$sqldelete ="DELETE FROM broker_user WHERE id='$id'";
	$delete = mysql_query($sqldelete);
	
	 echo "<script>top.location = 'view_broker_user.php'</script>"; 
?>
