<!DOCTYPE html>
<html>
<head>
	<title>Hire Freelancers. Make Things Happens | Upwork</title>
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
							<a href="">Upwork</a>
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
							<a href="/home">How it works</a>&nbsp &nbsp
							<a href="/home/login">Login</a>&nbsp &nbsp
							<a href="/home/registration">Sign Up</a>&nbsp &nbsp
						</form>
						<button class="button">Post a job</button>
					</h2>
				</div>
				<br><br>

				<table align="center" width="85%" border="1">
					<tr>
						<th>username</th>
						<th>email</th>
						<th>country</th>
						<th>type</th>
						<th>worktitle</th>
						<th>workdetails</th>
						<th>experience</th>
						<th>title</th>
						<th>titledetails</th>
						<th>english</th>
						<th>rate</th>
						<th>hour</th>
					</tr>
					@foreach($freelancer as $value)
					<tr>
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
					</tr>
					@endforeach
				</table>

				<br><br>
				<center><h2><a href="/home/fl">Search all freelancers</a></h2></center>
				<br><br>
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