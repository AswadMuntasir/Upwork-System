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
						<form method="post">
							@csrf
							<a href="">Upwork</a>
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						
							<button class="btn p-0-left-right" type="submit">Submit search</button>
							<div class="dropdown">
								<select class="dropdown" name="type" id="type">
									<option value="freelancers">Freelancers</option>
									<option value="job">Job</option>
								</select>
							</div>
							<input type="text" name="search" placeholder="Search" autocomplete="on">
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							<a href="#HomePage.html">How it works</a>&nbsp &nbsp
							<a href="/home/login">Login</a>&nbsp &nbsp
							<a href="/home/registration">Sign Up</a>&nbsp &nbsp
						</form>
						<button class="button">Post a job</button>
					</h2>
				</div>
				<br><br><br><br>
				<div id="navbar">
					<a href="/home/webdev">Web Dev</a>
					<a href="/home/mobiledev">Mobile Dev</a>
					<a href="/home/design">Design</a>
					<a href="/home/writing">Writing</a>
					<a href="/home/adminsupport">Admin Support</a>
					<a href="/home/customer_service">Customer Service</a>
					<a href="/home/marketing">Marketing</a>
					<a href="/home/accounting">Accounting</a>
					<a href="#see_all_categories">See All Categories</a>
				</div>
				<div>
				<div class="slideshow-container">
					<div class="mySlides fade" align="center">
						<div class="numbertext">1 / 3</div>
						<img src="{{asset('storage/img_3446') }}" height="500px" width="800px">
					</div>
					<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<img src="{{asset('storage/img_3454.jpg') }}" height="500px" width="800px">
					</div>
					<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<img src="{{asset('storage/img_3463.jpg') }}" height="500px" width="800px">
					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<center>
					<br><br>
					<button class="button" type="submit" value="register">Get Started</button>
				</center>
				</div>
				<br>
				<div>
					<table width="1200px" height="400px" align="center" border="0">
						<tr align="center">
							<td>
								<button class="button_big"><br><br><br><br><a href="/home/webMobSofDevQuotes">Web, Mobile & Software Dev</a></button>
							</td>
							<td>
								<button class="button_big"><br><br><br><br><a href="/home/designCreativeWorkQuotes">Design & Creative</a></button>
							</td>
							<td>
								<button class="button_big"><br><br><br><br><a href="/home/writingQuotes">Writing</a></button>
							</td>
							<td>
								<button class="button_big"><br><br><br><br><a href="/home/salesMarketingQuotes">Sales & Marketing</a></button>
							</td>
						</tr>
						<tr align="center">
							<td>
								<button class="button_big"><br><br><br><br><a href="/home/adminSupportQuotes">Admin Support</a></button>
							</td>
							<td>
								<button class="button_big"><br><br><br><br><a href="/home/customerServiceQuotes">Customer Service</a></button>
							</td>
							<td>
								<button class="button_big"><br><br><br><br><a href="/home/dataScienceAnalyticsQuotes">Data Science & Analytics</a></button>
							</td>
							<td>
								<button class="button_big"><br><br><br><br><a href="">Engineering & Architecture</a></button>
							</td>
						</tr>
					</table>
					
					<center>
						<font size="2">
							Don’t see what you’re looking for? <a href="#">See all categories</a>
						</font>
					</center>
					<br><br><br>
				</div>

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

				<div class="clearfix">
					<div class="box" style="background-color:#ffffff">
						<center>
							<h2>Basic</h2>
							<button class="button"><b>Select Basic</b></button>
							<p>Free*</p>
							<hr>
							<p>
								<ul>
									<li>Verified work history and reviews</li><br>
									<li>Unlimited proposals</li><br>
									<li>Built-in collaboration tools and easy payments</li><br>
									<li> **************************** *********************************** ******************* *********************************** </li>
								</ul>
							</p>
						</center>
					</div>
					<div class="box" style="background-color:#ccc">
						<center>
							<h2>Plus</h2>
							<button class="button"><b>Select Plus</b></button>
							<p>$49.99/month*</p>
							<hr>
							<p>
								<ul>
									<li>Everything in Basic</li><br>
									<li>Dedicated account managers to help you find and hire quality talent fast</li><br>
									<li>Project tracking and collaboration tools for teams</li><br>
									<li>Tailored search results featuring Top Rated and Rising Talent</li>
								</ul>
							</p>
						</center>
					</div>
					<div class="box" style="background-color:#ffffff">
						<center>
							<h2>Buisness</h2>
							<button class="button"><b>Contact Us</b></button>
							<p>$499/month**</p>
							<hr>
							<p>
								<ul>
									<li>Everything in Plus</li><br>
									<li>Consolidated billing and invoicing with net 30 pay</li><br>
									<li>Dedicated team of advisors to get you hiring faster and more successfully</li><br>
									<li>Detailed reporting with company insights and trends</li>
								</ul>
							</p>
						</center>
					</div>
					<div class="box" style="background-color:#ccc">
						<center>
							<h2>Enterprice</h2>
							<button class="button"><b>Contact Us</b></button>
							<p>Price varies - contact us for a demo</p>
							<hr>
							<p>
								<ul>
									<li>Everything in Buisness</li><br>
									<li>Custom configurable contracting and onboarding process</li><br>
									<li>Worker classification compliance services</li><br>
									<li>Project-based or managed solutions, and dedicated account executive</li>
								</ul>
							</p>
						</center>
					</div>
				</div>
				<br><br>
				<br>
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
					<center>
						<font size="6"><b>Choose the offering that works best for you</b></font><br><br>
						<font size="2">All options include access to Upwork’s talent pool of top-quality freelancers and agencies.</font>
					</center>
				</div>
				<br><br><br><br>
				<div>
					<table width="1200px" height="300px" align="center" border="0">
						<tr align="left">
							<th width="25%">
								<p><b>Top skill</b></p>
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
								<li><a href="">Android Developer</a></li>
							</td>
							<td>
								<li><a href="">Bookkeeper</a></li>
							</td>
							<td>
								<li><a href="">Content Writer</a></li>
							</td>
							<td>
								<li><a href="">Copywriter</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Customer Service Representative</a></li>
							</td>
							<td>
								<li><a href="">Database Administrator</a></li>
							</td>
							<td>
								<li><a href="">Data Scientist</a></li>
							</td>
							<td>
								<li><a href="">Facebook Developer</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Front-End Developer</a></li>
							</td>
							<td>
								<li><a href="">Game Developer</a></li>
							</td>
							<td>
								<li><a href="">Graphic Designer</a></li>
							</td>
							<td>
								<li><a href="">Information Security Analyst</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">iOS Developer</a></li>
							</td>
							<td>
								<li><a href="">Java Developer</a></li>
							</td>
							<td>
								<li><a href="">JavaScript Developer</a></li>
							</td>
							<td>
								<li><a href="">Logo Designer</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">Mobile App Developer</a></li>
							</td>
							<td>
								<li><a href="">PHP Developer</a></li>
							</td>
							<td>
								<li><a href="">Python Developer</a></li>
							</td>
							<td>
								<li><a href="">Resume Writer</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">Sales Consultant</a></li>
							</td>
							<td>
								<li><a href="">SEO Expert</a></li>
							</td>
							<td>
								<li><a href="">Social Media Manager</a></li>
							</td>
							<td>
								<li><a href="">Software Developer</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">Software Engineer</a></li>
							</td>
							<td>
								<li><a href="">Technical Writer</a></li>
							</td>
							<td>
								<li><a href="">UI Designer</a></li>
							</td>
							<td>
								<li><a href="">UX Designer</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">Virtual Assistant</a></li>
							</td>
							<td>
								<li><a href="">Web Designer</a></li>
							</td>
							<td>
								<li><a href="">Wordpress Developer</a></li>
							</td>
							<td>
								<li><a href="">Writer</a></li>
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
								<p><b>Trending skills</b></p>
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
								<li><a href="">Apple UIKit</a></li>
							</td>
							<td>
								<li><a href="">Apple Xcode</a></li>
							</td>
							<td>
								<li><a href="">Articulate storyline</a></li>
							</td>
							<td>
								<li><a href="">Atlassian Confluence</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Blockchain</a></li>
							</td>
							<td>
								<li><a href="">Customer retention</a></li>
							</td>
							<td>
								<li><a href="">eLearning</a></li>
							</td>
							<td>
								<li><a href="">Enterprise architecture</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">GitLab</a></li>
							</td>
							<td>
								<li><a href="">Go development</a></li>
							</td>
							<td>
								<li><a href="">Google App Engine API</a></li>
							</td>
							<td>
								<li><a href="">Google Cloud Platform</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Node.js</a></li>
							</td>
							<td>
								<li><a href="">Product photography</a></li>
							</td>
							<td>
								<li><a href="">Rapid prototyping</a></li>
							</td>
							<td>
								<li><a href="">Risk management</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">Scala development</a></li>
							</td>
							<td>
								<li><a href="">SCORM</a></li>
							</td>
							<td>
								<li><a href="">Tensorflow</a></li>
							</td>
							<td>
								<li><a href="">Volusion</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">Dropbox API</a></li>
							</td>
							<td>
								<li><a href="">iPhone UI design</a></li>
							</td>
							<td>
								<li><a href="">Genetic algorithms</a></li>
							</td>
							<td>
								<li><a href="">Vue.js</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">Social customer service</a></li>
							</td>
							<td>
								<li><a href="">HR consulting</a></li>
							</td>
							<td>
								<li><a href="">Oculus Rift</a></li>
							</td>
							<td>
								<li><a href="">Microsoft Power BI</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">Proposal writing</a></li>
							</td>
							<td>
								<li><a href="">Vuforia</a></li>
							</td>
							<td>
								<li><a href="">Instructional design</a></li>
							</td>
							<td>
								<li><a href="">React.js</a></li>
							</td>
						</tr>
					</table>
					<br><br><br>
					<center>
						<button class="button">Browse All Skills</button>
					</center>
					<br><br><br>
				</div>
				<div>
					<table width="1200px" height="300px" align="center" border="0">
						<tr align="left">
							<th width="25%">
								<p><b>Top Skills in US</b></p>
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
								<li><a href="">Adobe Illustrator Experts in US</a></li>
							</td>
							<td>
								<li><a href="">Adobe Photoshop Experts in US</a></li>
							</td>
							<td>
								<li><a href="">Blog Writers in US</a></li>
							</td>
							<td>
								<li><a href="">Creative Writers in US</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Customer Service <br>Representatives in US</a></li>
							</td>
							<td>
								<li><a href="">Data Entry Specialists in US</a></li>
							</td>
							<td>
								<li><a href="">Editors in US</a></li>
							</td>
							<td>
								<li><a href="">Excel Experts in US</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Graphic Designers in US</a></li>
							</td>
							<td>
								<li><a href="">JavaScript Developers in US</a></li>
							</td>
							<td>
								<li><a href="">Logo Designers in US</a></li>
							</td>
							<td>
								<li><a href="">Microsoft Office Specialists in US</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Microsoft Word Experts in US</a></li>
							</td>
							<td>
								<li><a href="">Photographers in US</a></li>
							</td>
							<td>
								<li><a href="">PowerPoint Experts in US</a></li>
							</td>
							<td>
								<li><a href="">Proofreaders in US</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">Social Media Marketers in US</a></li>
							</td>
							<td>
								<li><a href="">Video Editors in US</a></li>
							</td>
							<td>
								<li><a href="">WordPress Developers in US</a></li>
							</td>
							<td>
								<li><a href="">Writers in US</a></li>
							</td>
						</tr>
					</table>
				</div>
				<br><br><br>
				<div>
					<table width="1200px" height="300px" align="center" border="0">
						<tr align="left">
							<th width="25%">
								<p><b>Top Cities in US</b></p>
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
								<li><a href="">Atlanta, GA Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Austin, TX Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Brooklyn, NY Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Charlotte, NC Freelancers</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Chicago, IL Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Dallas, TX Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Denver, CO Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Houston, TX Freelancers</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Las Vegas, NV Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Los Angeles, CA Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Miami, FL Freelancers</a></li>
							</td>
							<td>
								<li><a href="">New York, NY Freelancers</a></li>
							</td>
						</tr>
						<tr align="left">
							<td>
								<li><a href="">Orlando, FL Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Philadelphia, PA Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Phoenix, AZ Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Portland, OR Freelancers</a></li>
							</td>
						</tr>
						<tr>
							<td>
								<li><a href="">San Diego, CA Freelancers</a></li>
							</td>
							<td>
								<li><a href="">San Francisco, CA Freelancers</a></li>
							</td>
							<td>
								<li><a href="">San Jose, CA Freelancers</a></li>
							</td>
							<td>
								<li><a href="">Seattle, WA Freelancers</a></li>
							</td>
						</tr>
					</table>
					<br><br><br>
					<center>
						<button class="button">Browse US Freelancers</button>
					</center>
					<br><br><br><br>
				</div>
				<div class="last_div">
					<table width="1000px" height="100px" align="center" border="0">
						<tr align="center">
							<td>
								<font color="green">For pre-vetted talent, compliance services and more</font><br>
								<font color="blue" size="6">Try Upwork Enterprise</font>
							</td>
							<td>
								<button class="button">Request A Demo</button>
							</td>
						</tr>
					</table>
					<br><br><br><br>
				</div>
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