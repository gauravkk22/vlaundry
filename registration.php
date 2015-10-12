<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Vlaundry</title>
		<link rel="icon" href="images/favicon.jpg">
		<link rel="shortcut icon" href="images/favicon.jpg" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/form.css">
		<script src="js/jquery.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/forms.js"></script>
		<script src="js/jquery.equalheights.js"></script>		
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/tms-0.4.1.js"></script>
		<script>


                             /* Slidder wrapper sent to js tms */


			$(document).ready(function(){
				$('.slider_wrapper')._TMS({
					show:0,
					pauseOnHover:false,
					prevBu:'.prev',
					nextBu:'.next',
					playBu:false,
					duration:800,
					preset:'fade',
					pagination:true,      //'.pagination',true,'<ul></ul>'
					pagNums:false,
					slideshow:8000,
					numStatus:false,
					banners: 'fade',
					waitBannerAnimation:false,
					progressBar:false
				});
			});


			$(document).ready(function(){
				!function(){
			var map=[]
			 ,names=[]
			 ,win=$(window)
			 ,header=$('header')
			 ,currClass
			$('.content').each(function(n){
			 map[n]=this.offsetTop
			 names[n]=$(this).attr('id')
			})
			win
			 .on('scroll',function(){
				var i=0
				while(map[i++]<=win.scrollTop());
				if(currClass!==names[i-2])
				currClass=names[i-2]
				header.removeAttr("class").addClass(names[i-2])
			 })
			}(); });
					function goToByScroll(id){
				$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
				}
				$(document).ready(function(){
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
		</script>
		
	</head>
	<body class="">



                             <!--                     header                          -->

		<header class="page1">
			<div class="container_12">
				<div class="grid_12">
					<h1><a href="#" onClick="goToByScroll('page1'); return false;"><img src="images/logo-1.png"   alt="Vlaundry"></a></h1>
					<div class="menu_block">
						<nav class="">
							<ul class="sf-menu">
								<li class="current men"><a onClick="goToByScroll('page1'); return false;" href="#">Sign Up Here </a> <strong class="hover"></strong></li>								
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</header>
		<div id="page2" class="content" background-image=url("images/lhouse.jpg")>

			
				
			<div class="container_12">
				<div class="grid_12">
					
						<form method='post' action='registration.php'>
							<table width='400' border='5' align='center'>
								<tr>
									<td colspan='5' align='center'><h1>Login</h1></td>
								</tr>

								<tr>
									<td align='center'>User Name:</td>
									<td><input type-'text' name='name'/></td>
								</tr>

								<tr>
									<td align='center'>User Password:</td>
									<td><input type='password' name='pass'/></td>
								</tr>

								<tr>
									<td align='center'>Email:</td>
									<td><input type='text' name='email'/></td>
								</tr>

								<tr>
									<td colspan='5' align='center'>
										<input type='submit' name='submit' value='Sign Up'/>
									</td>
								</tr>
					<br><br><p><p>
							
			</div>
		</div>
	</div>
<?php

mysql_connect("localhost","root","");
mysql_select_db("user_db");

	if(isset($_POST['submit'])){
			$user_name= $_POST['name'];
			$user_pass= $_POST['pass'];
			$user_email= $_POST['email'];

			if($username==''){
				echo"<script>alert('* Please enter your name!')</script>";
				exit();
			}

			if($user_pass==''){
				echo"<script>alert('* Please enter your password!')</script>";
				exit();
			}


			if($user_email==''){
				echo"<script>alert('* Please enter your email!')</script>";
				exit();
			}

			$check_email= "select * from users where email='$user_email'";

			$run= mysql_query($check_email);

			if(_num_rows($run)>0){

				echo "<script> alert('Email $user_email already exists in our database , please try another one!')</script>";
				exit();
			}

			$query= " insert into users(user_name, user_pass, user_email) values('$username','$user_pass','$useremail')";

			if(mysql_query($query)){
				echo"<script> alert('Registration successfull')</script>";
			}


	}
?>
		
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<a onClick="goToByScroll('page1'); return false;" href="#"><img src="images/logo-1.png" alt="" height=25px width=60px></a>  &copy; 2015| <a href="#">Privacy Policy</a> <br> Website designed by <a href="#" rel="nofollow">Gaurav</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>