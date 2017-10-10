<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
function validFname()
{
	var name=document.getElementById("FirstName").value;
	var pattern= /^[a-zA-Z ]*$/;
	
	if(name=="" || name==null)
		{
		document.getElementById("Fnerror").innerHTML="<font color=red>User Name cannot be null</font>";
		return false;
	}
	else if(!pattern.test(name))
		{
		document.getElementById("Fnerror").innerHTML="<font color=red>User Name contains digits</font>";
		return false;
		}
	else 
		{
		document.getElementById("Fnerror").innerHTML="";
		return true;
		}
}
function validLname()
{
	var name=document.getElementById("LastName").value;
	var pattern= /^[a-zA-Z ]*$/;
	
	if(name=="" || name==null)
		{
		document.getElementById("Lnerror").innerHTML="<font color=red>User Name cannot be null</font>";
		return false;
	}
	else if(!pattern.test(name))
		{
		document.getElementById("Lnerror").innerHTML="<font color=red>User Name contains digits</font>";
		return false;
		}
	else 
		{
		document.getElementById("Lnerror").innerHTML="";
		return true;
		}
}
function validpass()
{
	var password=document.getElementById("Password").value;
	var pattern=/^[A-Za-z,0-9]{6,10}$/;
	var pattern1=/^[A-Za-z,0-9]{0,5}$/;
	var pattern2=/^[A-Za-z,0-9]{11,50}$/;
	if(password==null||password=="")
		{
		
		document.getElementById("perror").innerHTML="<font color=red>Please enter a password</font>";
		return false;
		}
	else if(pattern1.test(password)||pattern2.test(password))
	{
	
	document.getElementById("perror").innerHTML="<font color=red>Password should be of 6 and max of 10 characters</font>";
	return false;
	}
	else if(pattern.test(password)) {
		//alert("no prob");
		document.getElementById("perror").innerHTML="";
		return true;
	}
	else if(!pattern1.test(password)||!pattern2.test(password))
	{
	//alert("special char");
	document.getElementById("perror").innerHTML="<font color=red>Password should not contain special characters or space</font>";
	return false;
	}
	
	}
	function validemail(){
	var x=document.getElementById("Email").value;
	var pattern = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    if(x==""||x==null)
    	{
	document.getElementById("emerror").innerHTML="<font color='red'>Email address cannot be null</font>";
	return false;
    	}
    else if(!pattern.test(x))
    	{
		document.getElementById("emerror").innerHTML="<font color='red'>Invalid Email Address</font>";
		return false;
    	}
	else{
		document.getElementById("emerror").innerHTML="";
		return  true;
	}
    
}
function finalValidation()
{
	if(validFname()==true && validpass()==true &&   validLname()==true && validemail()==true)
		{
		return true;
		}
	else 
	{
		return false;
		
	}
		
	
	}
	</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.php" ><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="login.php" class="active"><i class="fa fa-lock"></i> Signup</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								<li class="dropdown"><a href="#">Books</a>
                                   
                                </li> 
								<li class="dropdown"><a href="#">Gadgets</a>
                                    
                                </li> 
								
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	
	  
   
   


	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form method="post" action="registerdb.php" name="form" onsubmit="return finalValidation();">
							<table cellspacing=10>
							<tr><td>FirstName:</td> <td><input type="text" name="FirstName" placeholder="Enter your FirstName" required maxlength="25" id="FirstName" onblur="return validFname()"><span id="Fnerror"></span></td></tr>
							<tr><td>LastName:</td><td><input type="text" name="LastName" placeholder="Enter your LastName" required maxlength="25" id="LastName" onblur="return validLname()"><span id="Lnerror"></span></td></tr>
							<tr><td>Email id:</td><td><input type="email" name="Email" placeholder="Enter Email Address" required maxlength="150" id="Email" onblur="return validemail()" ><span id="emerror"></span></td></tr>
							<tr><td>Password:</td><td><input type="password" name="Password" placeholder="Enter Password" required maxlength="25" id="Password" onblur="return validpass()" ><span id="perror"></span> </td></tr>
							<tr><td><button type="submit" class="btn btn-default">Signup</button></td></tr>
							</table>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div> 	
	</section><!--/form-->
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>