<?php
$sql_advertise= "SELECT * FROM admin_advertise ORDER BY id DESC limit 8";
$result_advertise = mysql_query($sql_advertise);
?>

<div id="rightmid">
<?php
	 while ($retrive = @mysql_fetch_array ($result_advertise))
	                  {
                      ?>
                      <img src="admin/advertise/<?php echo $retrive['image_path'];   ?>" width="127" border="1px;"  height="117" class="style1"  style="padding-bottom:10px;"  />
	<?php }?>            
</div>