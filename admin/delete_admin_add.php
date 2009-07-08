<?php
	require_once("../includes/database.php");
	$id =$_GET['id'];
	
	$sqldelete ="DELETE FROM admin_advertise WHERE id='$id'";
	$delete = mysql_query($sqldelete);
	
	echo "<script>top.location = 'mange_admin_advertise.php'</script>";
?>
