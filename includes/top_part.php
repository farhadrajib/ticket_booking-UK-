<?php 
    
	require_once("includes/database.php");
	
	$sql_latestnews= "SELECT * FROM latest_news ORDER BY id DESC limit 1";
	$resultlatestnews = mysql_query($sql_latestnews);

?>
<!--top part start -->
		<div id="toppart">
        <!--banner left-->
        <div id="bannerLeft"><a href="index.html"><img src="images/logo.gif" alt="Bluish" width="195" height="91" class="logo" border="0"  /></a></div>
        <div id="bannerright"><div id="searchengin">
							
							  <form name="serch" method="post" action="" class="serch">
                                <label class="icon"></label>
                                <input type="text" name="name" value="Enter Search Items" class="txtBox" />
                                <input type="submit" name="go" value="Go" class="go" />
                                <a href="#">For Advance Search</a>
							  </form>
							
						  </div></div>
        <!--top ul start-->
						
                        <div id="rightTop">
                       
							<ul class="navi">
								<li><a href="index.php" class="home">Home</a></li>
																	
								<li><a href="#">Member</a></li>
								<li><a href="#">Music</a></li>
								<li><a href="#">Sports</a></li>
								<li><a href="#">Arts and Theatre</a></li>
								<li><a href="#">Other Events </a></li>
								<li ><a href="#"> Restaurant</a></li>
                                <li><a href="#">Hotel </a></li>
                                <li class="nobor"><a href="#" class="contact">Airport taxi serveice</a></li>
							</ul>
							  
                               <p class="slog">
								  <marquee>
                                    <?php
                      $retrive_latestnews = @mysql_fetch_array ($resultlatestnews);
	                  
                      
                      		echo $retrive_latestnews['l_details']; 
                      
                      
                      ?>
                             </marquee>
                               </p>
						</div>
