<!DOCTYPE html>
<html lang="en">
   <head>
       <?php session_start(); ?>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Shoes</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <div class="header_section header_main">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="#"><img src="images/logo.png"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="addproduct.php">addproduct</a>
                           <a class="nav-item nav-link" href="viewproduct.php">viewproduct</a>
                           <a class="nav-item nav-link" href="shoes.php">other</a>
                           <a class="nav-item nav-link" href="changepassword.php">changepass</a>
                           <a class="nav-item nav-link" href="login.php">login</a>
                           <a class="nav-item nav-link last" href="profile.php"><img src="images/p3.png"></a>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>
    <br><br><br><br><br><br><br><br>
    
    <center>
<form name="f1" class="main-layout" method="post" enctype="multipart/form-data">
	
<?php 
		if(isset($_POST['ok']))
		{	
			$con=mysqli_connect("localhost","root","","pullo");
			$t=$_FILES["photo"]["name"];
			if (file_exists("upload/".$_FILES["photo"]["name"])){	
						$rand_name = md5(time());
						$rand_name=rand(0,999999999);
						$pic=$rand_name;
				$pic="upload/".$rand_name.$_FILES["photo"]["name"];

				move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
			}else
			{
				$pic="upload/".$_FILES["photo"]["name"];		
				move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
			}

			
			$q="insert into product_details(id,product_name,price,company,quantity,photo) values(NULL,'".$_POST['productname']."','".$_POST['price']."','".$_POST['company']."','".$_POST['Quantity']."','$pic')";
			
			$r=mysqli_query($con,$q);

			if($r)
			{
				echo"<script>alert('product added sccesfully)</script>";
			}
			else
			{
				echo"<script>alert('something went wroung')</script>";
			}
		}
	?>
<table align="center" border="1" cellpadding="10" cellspacing="10">
		
			<tr>
				<td class="form-group" align="left" valign="top">
					<font size="+1" color="black">Product name</font>
				</td>
				<td align="center" valign="top">
					<input class="email-bt" type="text" name="productname" placeholder="Product name" size="50" />
				</td>
			          
            	</td>
	  </tr>
	  <tr>
				<td class="form-group" align="left" valign="top">
					<font size="+1" color="black">Price</font>
				</td>
				<td align="center" valign="top">
				<input class="email-bt" type="text" name="price" placeholder="Price"  size="50"  />
				</td>
			
            
            	</td>
	  </tr>
	  <tr>
				<td class="form-group" align="left" valign="top">
					<font size="+1" color="black">Company</font>
				</td>
				<td align="center" valign="top">
             	<input class="email-bt" type="text" name="company" placeholder="company"  size="50" />
				</td>
            
            	</td>
	  </tr>
	  <tr>
				<td class="form-group" align="left" valign="top">
					<font size="+1" color="black">Quantity</font>
				</td>
				<td align="center" valign="top">
						<input class="email-bt"  type="text" name="Quantity" placeholder="Quantity"  size="50"  />
				</td>
            
            	</td>
	  </tr>
	  <tr>
				<td class="form-group" align="left" valign="top">
					<font size="+1" color="black">image</font>
				</td>
				<td align="center" valign="top">
					<input type="file" name="photo" title="Photo Graph" id="photo" value="Image"/>
				</td>
            
            	</td>
	  </tr>
	  
	  
	  <tr>
				<td align="center" valign="top">
				<input type="reset" name="rst" value="RESET">
				</td>
				<td align="center" valign="top">
				<input type="submit" name="ok" value="ADD">
				</td>
			</tr>
		</table>
</table>

</form>
</center>
<br><br><br><br><br>





	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-6 col-lg-2">
    					<div><a href="#"><img src="images/footer-logo.png"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71) 1234567890</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">Demo@gmail.com</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>
    							<li><a href="#"><img src="images/fb-icon.png"></a></li>
    							<li><a href="#"><img src="images/twitter-icon.png"></a></li>
    							<li><a href="#"><img src="images/in-icon.png"></a></li>
    							<li><a href="#"><img src="images/google-icon.png"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-4 col-lg-2">
    		        	<p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur  ipsum dolor sit amet,</p>
    		        </div>
    		        <div class="col-sm-4 col-lg-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
    		        </div>
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Our Company </h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Delivery</li>
    				    		<li>Legal Notice</li>
    				    		<li>About us</li>
    				    		<li>Secure payment</li>
    				    		<li>Contact us</li>
    				    	</ul>
    				    </div>
    		        </div>
    			<div class="col-sm-6 col-lg-3">
    				<h2 class="adderess_text">Products</h2>
    				<div class="delivery_text">
    				    	<ul>
    				    		<li>Prices drop</li>
    				    		<li>New products</li>
    				    		<li>Best sales</li>
    				    		<li>Contact us</li>
    				    		<li>Sitemap</li>
    				    	</ul>
    				    </div>
    			</div>
    			<div class="col-sm-6 col-lg-2">
    				<h2 class="adderess_text"></h2>you are admin,login
    				<div class="form-group">
                       
                    </div>
                    <a href="admin_login.php" class="subscribr_bt">admin_login</a>
    			</div>
    			</div>
    	        </div> 
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
   
</html>
