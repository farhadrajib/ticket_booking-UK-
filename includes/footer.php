 <?php
     require_once("includes/database.php");
	 
	 
	 $sql_comments=mysql_query("select u_c.*,u.* from user_comments u_c,user u where u_c.u_id=u.u_id order by id DESC limit 0,2");
	












?>
 
 <div style="clear:both"> </div>
 <div id="blackMain">
                    	<div id="black">
                        	<div id="service">
                        		<h2>Services</h2>
                                <ul>
                                	<li><a href="#">Service 1</a></li>
                                   <li><a href="#">Service 2</a></li>
                                    
                                  
                                </ul>
                            <br class="spacer" />
                            </div>
                          <div id="testimonial">
                          	<h2>User Comments</h2>
                            
                          
                          
                          <?php 
						  		while( $user_comments=@mysql_fetch_array($sql_comments)) {
						   ?>
                           <p class="testTxt1"><span>
                           <?php   echo $user_comments["name"] . "..............."; ?> </span>
                            <?php   echo $user_comments["details"] ?> </p>
						   
						   <?php } ?>
                           	
	 
						  
						  <br class="spacer" />
						  
						
                          
                          </div>
                          <div id="newsletter">
                          	<h2>Newsletter</h2>
                            <form name="serch" action="#" method="post">
                            <input type="text" name="name" value="Enter Email ID" class="txtBox2" />
                            <input type="submit" name="signup" value="Signup" class="serch" />
                            <br class="spacer" />
                            </form>
                            <p class="tollfree">+01-7789-5566</p>
                            <a href="http://validator.w3.org/check?uri=referer" class="xhtml">Xhtml Valid</a>
                            <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css">Css Valid</a>
                          <br class="spacer" />
                          </div>
                        <br class="spacer" />
                        </div>
                    <br class="spacer" />
             </div>
            <!--black end -->
            <!--footer start -->
            	<div id="footerMain">
                	
  <div id="footer"> 
    <ul>
      <li><a href="#" class="home2">Home</a>|</li>
      <li><a href="#">About Us</a>|</li>
      <li><a href="#">Terms & Condition</a>|</li>
      <li><a href="#">Feedback</a>|</li>
      <li><a href="#">Company Policy</a>|</li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <p class="copyright">Copyright © companyname.com. All Rights Reserved.</p>
    <p class="design">Designed by : <a href="http://www.templateworld.com/" target="_blank" class="link">H.S Solutions</a></p>
  </div>
                </div>