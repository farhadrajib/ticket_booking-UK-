<?php

if(isset($_POST)){
	extract($_POST);
   
   $id=$_SESSION['uid'];
 $sql  = "INSERT INTO user_comments values('','$id','$title','$details','$status') ";
 $result = $database->query($sql);  
 
 }
 ?>

<div id="rightmid">
<form name="form1" method="post" action="">
  <table width="264" border="0" align="center">
    <tr>
      <td width="49">&nbsp;</td>
      <td width="193">&nbsp;</td>
    </tr>
    <tr>
      <td>Title</td>
      <td><input type="text" name="title" id="title"></td>
    </tr>
    <tr>
      <td>Detailas</td>
      <td><textarea name="details" id="details"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit"></td>
    </tr>
  </table>
</form>


</div>