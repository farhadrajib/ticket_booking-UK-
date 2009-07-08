
<?php
require_once("includes/database.php");

if(isset($_POST)){
	extract($_POST);
   
  
 $sql  = "INSERT INTO user values('','$name','$address','$email','$phone','$username','$password','') ";
 $result = $database->query($sql);  
 
 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include('includes/top_part.php'); ?>
<?php include('includes/left_part.php'); ?>

<?php include('pages/user_registration.php'); ?>


<?php include('includes/right_part.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>
