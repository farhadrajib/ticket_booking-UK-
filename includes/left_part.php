<?php 
	require_once("includes/database.php");
	
	$sql_latestnews= "SELECT * FROM latest_news ORDER BY id DESC limit 4";
	$resultlatestnews = mysql_query($sql_latestnews);

?>

<div id="leftPart">
					<!--<a href="index.html"><img src="images/logo.gif" alt="Bluish" width="195" height="91" class="logo"  /></a>-->
				<!--	<p class="latestWork">
						Latest  Works
						<a href="#">&nbsp;</a>
					</p>-->
					<h2 class="more">More Links</h2>
					<ul class="moreLink">
						<li><a href="#">Music [200]</a></li>
						<li><a href="#">Arts and Theatre [150] </a></li>
						<li><a href="#">Sports [120] </a></li>
						<li><a href="#">Others Event [100] </a></li>
						<li><a href="#">Restaurant </a></li>
						<li><a href="#">Hotel </a></li>
						<li class="nobor"><a href="#">Airport & Taxi Service </a></li>
					</ul>
                    <h2 class="more">Top News</h2>
					<div class="boxes">
						
                        
                          <?php
                      while ($retrive_latestnews1 = @mysql_fetch_array ($resultlatestnews))
	                  {
					  ?>
                       <p class="news" ><a href="#" class="link"><?php   echo $retrive_latestnews1['l_title'];  ?></a></p>
                      		
                       <?php
                      }
                      ?>
                         
                    
					</div>
                    
					
<a class="online" href="user_comments.php">Online Registration</a>
                    <!--<p class="job"><a href="#">Join now</a></p>-->
                   
                   <h2 class="more">Advertise section</h2>
					<div class="advertise">
						<p class="news" >
                          <a href="#" class="link">New Title 1</a></p>
                        <p class="news" >
                          <a href="#" class="link"> New Title 2</a></p>
					</div>
		  </div>