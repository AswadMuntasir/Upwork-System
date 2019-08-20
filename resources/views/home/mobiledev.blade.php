<!DOCTYPE html>
<html>
<head>
	<title>Top Web Dev For Hire | Upwork</title>
	<style>
		.header {
			padding: 10px 16px;
			background: #00000000;
			color: #f1f1f1;
			background-color: #f5f7b9;
		}
		.content {
			padding: 16px;
		}
		.sticky {
			position: fixed;
			top: 0;
			width: 100%;
		}
		.sticky + .content {
			padding-top: 102px;
		}
		.dropbtn {
			background-color: #4caf50;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
		}
		.dropdown {
			position: relative;
			display: inline-block;
		}
		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}
		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}
		.dropdown-content a:hover {
			background-color: #ddd;
		}
		.dropdown:hover .dropdown-content {
			display: block;
		}
		.dropdown:hover .dropbtn {
			background-color: #3e8e41;
		}
		* {box-sizing: border-box}
			body {font-family: Verdana, sans-serif; margin:0}
		.mySlides {display: none}
			img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
			max-width: 700px;
			position: relative;
			margin: auto;
		}

		/* Next & previous buttons */
		.prev, .next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			width: auto;
			padding: 16px;
			margin-top: -22px;
			color: white;
			font-weight: bold;
			font-size: 18px;
			transition: 0.6s ease;
			border-radius: 0 3px 3px 0;
			user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover, .next:hover {
			background-color: rgba(0,0,0,0.8);
		}

		/* Number text (1/3 etc) */
		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
			cursor: pointer;
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
		}

		.active, .dot:hover {
			background-color: #717171;
		}

		/* Fading animation */
		.fade {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
			animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}

		@keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
			.prev, .next,.text {font-size: 11px}
		}

		body {
			margin: 0;
			background-color: #f1f1f1;
			font-family: Arial, Helvetica, sans-serif;
		}

		#navbar {
			background-color: #333;
			position: fixed;
			top: 105px;
			width: 100%;
			display: block;
			transition: top 0.3s;
		}

		#navbar a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 15px;
			text-decoration: none;
			font-size: 17px;
		}

		#navbar a:hover {
			background-color: #ddd;
			color: black;
		}
		.button {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}

		.button_big {
			background-color: #ffffff; /* Green */
			border: none;
			color: black;
			height: 150px;
			width: 250px;
			padding: 15px 32px;
			text-align: bottom;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
		.button5 {border-radius: 50%;}

		* {
			box-sizing: border-box;
		}

		.box {
			float: left;
			width: 25%;
			padding: 50px;
		}

		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}
		a {
			color: green;
		}
		.last_div {
			padding: 30px 15px;
		}
		.footer {
			padding: 30px 30px;
			background-color: #2a2854;
			width: 100%;
			height: 550px;
			color: white;
		}
		.al {
			color: white;
		}
		body {
    	font: Montserrat, sans-serif;
  		}
		p {font-size: 16px;}
  		.margin {margin-bottom: 30px;;}
		
		.error {color: #FF0000;}
 		
 		hr {
  		border: 1px solid ##000070;
  		margin-bottom: 25px;
  		}

  		* {
  		box-sizing: border-box;
		}

		input[name=fname], input[name=lname], input[name=email] {
  		width: 50%;
  		padding: 15px;
  		margin: 5px 0 22px 0;
  		display: inline-block;
  		border: none;
  		background: #f1f1f1;
		}

		input[name=fname]:focus, input[name=lname]:focus, input[name=email]:focus {
  		background-color: #ddd;
  		outline: none;
		}

  		.registerbtn {
  		background-color: #8c0027;
  		color: white;
  		padding: 16px 20px;
  		margin: 8px 0;
  		border: none;
  		cursor: pointer;
  		width: 50%;
  		opacity: 1;
  		font-size: 30px;
		}

  		.registerbtn:hover {
  		opacity: 1;
		}

  		a {
  		color: dodgerblue;
		}

  		.signin {
  		background-color: #f1f1f1;
  		text-align: center;
		}
  		

		.tooltip 
		{
			position: relative;
			display: inline-block;
			border-bottom: 1px dotted black;
		}

		.tooltip .tooltiptext 
		{
			visibility: hidden;
			width: 400px;
			background-color: black;
			color: #fff;
			text-align: center;
			border-radius: 6px;
			padding: 5px 0;
			position: absolute;
			z-index: 1;
		}
		.tooltip:hover .tooltiptext
		{
			visibility: visible;
		}
	</style>
</head>
<body>
	<div>
		<table>
			<tr>
				<div class="header" id="myHeader">
					<h2>
						<form method="GET">
							@csrf
							<a href="/home">Upwork</a>
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						
							<button class="btn p-0-left-right" type="submit">Submit search</button>
							<div class="dropdown">
								<select class="dropdown">
									<option value="freelancers">Freelancers</option>
									<option value="job">Job</option>
								</select>
							</div>
							<input type="text" name="search" placeholder="Search" autocomplete="on">
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							<a href="#HomePage.html">How it works</a>&nbsp &nbsp
							<a href="#HomePage.html">Login</a>&nbsp &nbsp
							<a href="#HomePage.html">Sign Up</a>&nbsp &nbsp
						</form>
						<button class="button">Post a job</button>
					</h2>
				</div>
				<br><br><br><br>
				<div id="navbar">
					<a href="/home/webdev">Web Dev</a>
					<a href="/home/mobiledev">Mobile Dev</a>
					<a href="#design">Design</a>
					<a href="#writing">Writing</a>
					<a href="#admin_support">Admin Support</a>
					<a href="#customer_service">Customer Service</a>
					<a href="#marketing">Marketing</a>
					<a href="#accounting">Accounting</a>
					<a href="#see_all_categories">See All Categories</a>
				</div>
				<div>
				<div class="slideshow-container">
					<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
						<img src="img_3446.jpg" style="width:100%">
					</div>
					<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<img src="img_3454.jpg" style="width:100%">
					</div>
					<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<img src="img_3463.jpg" style="width:100%">
					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				</div>
				<br>

				<table width="100%" align="center" border="2">
					<tr>
						<th width="7.14%">User Name</th>
						<th width="7.14%">Email</th>
						<th width="7.14%">Country</th>
						<th width="7.14%">Type</th>
						<th width="7.14%">Work Title</th>
						<th width="7.14%">Work Details</th>
						<th width="7.14%">Experience</th>
						<th width="7.14%">Title</th>
						<th width="7.14%">Title Details</th>
						<th width="7.14%">English</th>
						<th width="7.14%">Rate</th>
						<th width="7.14%">Hour</th>
						<th width="7.14%">Phone Number</th>
						<th width="7.14%">Status</th>
					</tr>
					@foreach($freelancer as $value)
					<tr align="center">
						<td>{{$value['username']}}</td>
						<td>{{$value['email']}}</td>
						<td>{{$value['country']}}</td>
						<td>{{$value['type']}}</td>
						<td>{{$value['worktitle']}}</td>
						<td>{{$value['workdetails']}}</td>
						<td>{{$value['experience']}}</td>
						<td>{{$value['title']}}</td>
						<td>{{$value['titledetails']}}</td>
						<td>{{$value['english']}}</td>
						<td>{{$value['rate']}}</td>
						<td>{{$value['hour']}}</td>
						<td>{{$value['phoneno']}}</td>
						<td>{{$value['status']}}</td>
					</tr>
					@endforeach
				</table>
				<br><br><br>

				<center><h1 class="margin">Sign up for free project quotes</h1>
		  			<hr style="width: 50%">
			  		<form method="POST">
			  			@csrf
			  			<br><label for="fname"><b>First Name</b></label></br>
				    	<input type="text" placeholder="First Name" name="fname" id="fname" required>

			  			<br><label for="lname"><b>Last Name</b></label></br>
			    		<input type="text" placeholder="Last Name" name="lname" id="lname">

			    		<br><label for="email"><b>Work email address</b></label></br>
				    	<input type="email" placeholder="Work email address" name="email" id="email">
			    		
			    		<hr style="width: 50%">

			    		<button type="submit" class="registerbtn" onclick="registrationButton">Register</button>
		    		</form>
	  			</center>

	  			<br><br><br>
				<div>
					<center><h2>Trusted by 5M+ businesses</h2></center>
					<table width="1400px" height="250px" align="center" border="0">
						<tr align="center">
							<td>
								<b>Microsoft worked with Upwork to collaborate on an integrated solution that helps enterprises work with freelancers at scale powered by Microsoft 365 and Upwork Enterprise.
							</td>
							<td align="center">
								<b>Airbnb works with Upwork to post more than 10,000 projects on Upwork.</b>
							</td>
							<td align="center">
								<b>GE saves time and money to post more jobs on Upwork than any other platform.</b>
							</td>
							<td align="center">
								<b>Automattic worked with Upwork to build their remote-first company with top talent found on Upwork.</b>
							</td>
							<td align="center">
								<b>Bissell works with Upwork as a staffing alternative to their hiring process.</b>
							</td>
							<td align="center">
								<b>COTY worked with Upwork to evolve their contingent workforce management.</b>
							</td>
						</tr>
					</table>
				</div>
				<br><br><br>
				<div>
					<center><h1>How it works</h1></center>
					<table width="1200px" height="300px" align="center" border="0">
						<tr align="center">
							<td>
								<b>Post a job (it’s free)</b><br><br>
								Tell us about your project. Upwork connects you with top freelancers and agencies around the world, or near you.
							</td>
							<td align="center">
								<b>Bids come to you</b><br><br>
								Get qualified proposals within 24 hours. Compare bids, reviews, and prior work. Interview favorites and hire the best fit.
							</td>
							<td align="center">
								<b>Collaborate easily</b><br><br>
								Use Upwork to chat or video call, share files, and track project milestones from your desktop or mobile.
							</td>
							<td align="center">
								<b>Payment simplified</b><br><br>
								Pay hourly or fixed-price and receive invoices through Upwork. Pay for work you authorize.
							</td>
						</tr>
					</table>
				</div>
				<br><br><br><br>
				<div>
					<table width="1200px" height="300px" align="center" border="0">
						<tr align="left">
							<th width="25%">
								<p><b>Top web developer skills</b></p>
							</th>
							<th width="25%">
							</th>
							<th width="25%">
							</th>
							<th width="25%">
							</th>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev">Android Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Bookkeeper</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Content Writer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Copywriter</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev">Customer Service Representative</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Database Administrator</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Data Scientist</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Facebook Developer</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev">Front-End Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Game Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Graphic Designer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Information Security Analyst</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev">iOS Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Java Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">JavaScript Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Logo Designer</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="/home/mobiledev">Mobile App Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">PHP Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Python Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Resume Writer</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="/home/mobiledev">Sales Consultant</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">SEO Expert</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Social Media Manager</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Software Developer</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="/home/mobiledev">Software Engineer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Technical Writer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">UI Designer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">UX Designer</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="/home/mobiledev">Virtual Assistant</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Web Designer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Wordpress Developer</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Writer</a></li>
							</td>
						</tr>
					</table>
					<br><br><br>
				</div>
				<br><br><br>
				<div>
					<table width="1200px" height="300px" align="center" border="0">
						<tr align="left">
							<th width="25%">
								<p><b>Top web developer skills in US</b></p>
							</th>
							<th width="25%">
							</th>
							<th width="25%">
							</th>
							<th width="25%">
							</th>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev">Adobe Photoshop Experts in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">AJAX Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Android App Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">AngularJS Developers in US</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev">ASP.NET Specialists in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">ASP.NET MVC Specialists in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Bootstrap Specialists in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">C# Developers & Programmers in US</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev">C++ Programmers & Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">CSS Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">CSS3 Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Graphic Designers in US</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev">HTML Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">HTML5 Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">iOS Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Java Developers in US</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="/home/mobiledev">jQuery Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">MongoDB Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">MySQL Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev/home/mobiledev">MySQL Programmers in US</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev/home/mobiledev">Node.js Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev/home/mobiledev">PHP Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev/home/mobiledev">Python Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev/home/mobiledev">React.js Developers in US</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="/home/mobiledev/home/mobiledev">Responsive Web Designers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev/home/mobiledev">Ruby Developers & Programmers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev/home/mobiledev">Ruby on Rails Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">SEO Experts in US</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="/home/mobiledev">SQL Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Web Designers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">Website Developers in US</a></li>
							</td>
							<td>
								<li><a href="/home/mobiledev">WordPress Developers in US</a></li>
							</td>
						</tr>
					</table>
				</div>
				<br><br><br>
				<div class="footer">
					<p align="center">Looking to hire for long-term or full-time assignments? See how <a href="" class="al">Upwork Payroll</a> simplifies admin.</p>
					<hr>
					<table width="1200px" height="250px" align="center" border="0">
						<tr align="center">
							<th>COMPANY</th>
							<th>About Us</th>
							<th>Investor Relations</th>
						</tr>
						<tr align="center">
							<td><a href="" class="al">Careers</a></td>
							<td><a href="" class="al">Press</a></td>
							<td><a href="" class="al">Trust & Safety</a></td>
						</tr>
						<tr align="center">
							<td><a href="" class="al">Terms of Service</a></td>
							<td><a href="" class="al">Privacy Policy</a></td>
							<td><a href="" class="al">Accessibility</a></td>
						</tr>
						<tr align="center">
							<td><a href="" class="al">RESOURCES</a></td>
							<td><a href="" class="al">Customer Support</a></td>
							<td><a href="" class="al">Hiring Headquarters</a></td>
						</tr>
						<tr align="center">
							<td><a href="" class="al">Hiring Resources</a></td>
							<td><a href="" class="al">Upwork Blog</a></td>
							<td><a href="" class="al">Customer Stories</a></td>
						</tr>
						<tr align="center">
							<td><a href="" class="al">Business Resources</a></td>
							<td><a href="" class="al">Payroll Services</a></td>
							<td><a href="" class="al">BROWSE</a></td>
						</tr>
						<tr align="center">
							<td><a href="" class="al">Freelancers by Skill</a></td>
							<td><a href="" class="al">Freelancers in USA</a></td>
							<td><a href="" class="al">Freelancers in UK</a></td>
						</tr>
						<tr align="center">
							<td><a href="" class="al">Freelancers in Canada</a></td>
							<td><a href="" class="al">Freelancers in Australia</a></td>
							<td><a href="" class="al">Jobs in USA</a></td>
						</tr>
						<tr align="center">
							<td><a href="" class="al">Find Jobs</a></td>
							<td></td>
							<td></td>
						</tr>
					</table>
					<br><br><br>
					<hr>
					<table width="1200px" height="30px" align="center" border="0">
						<tr>
							<td align="left">
								&nbsp &nbsp &nbsp
								Follow &nbsp &nbsp <button class="button5" value="Facebook">f</button> &nbsp 
								<button class="button5" value="Twiter">t</button> &nbsp 
								<button class="button5" value="Instagram">I</button> &nbsp 
								<button class="button5" value="InkedIn">In</button> &nbsp 
								<button class="button5" value="Youtube">Y</button>
							</td>
							<td align="right">
								Mobile App &nbsp &nbsp <button class="button5" value="Apple">AP</button> &nbsp
								<button class="button5" value="Android">AN</button>
							</td>
						</tr>
					</table>
					<hr>
					<br><br>
					<font color="white"><center>© 2015 - 2019 Upwork® Global Inc.</center></font>
				</div>
			</tr>
		</table>
	</div>
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
		    	slides[i].style.display = "none";  
			}
			for (i = 0; i < dots.length; i++) {
		    	dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
		}
	</script>

	<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			} else {
				header.classList.remove("sticky");
			}
		}
	</script>

	<script>
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.getElementById("navbar").style.top = "105px";
			} else {
			   	document.getElementById("navbar").style.top = "-50px";
			}
			prevScrollpos = currentScrollPos;
		}
	</script>

</body>
</html>