<?php
session_start();
require_once("includes/database.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php require_once('includes/top_part.php'); ?>
<?php require_once('includes/left_part.php'); ?>

<?php require_once('pages/home_page.php'); ?>


<?php require_once('includes/right_part.php'); ?>
<?php require_once('includes/footer.php'); ?>

</body>
</html>
