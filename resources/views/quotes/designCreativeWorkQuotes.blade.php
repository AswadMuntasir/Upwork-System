<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign Up For Free Quites</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body {
    	font: 30px Montserrat, sans-serif;
	    line-height: 1.8;
    	color: #000033;
  		}
		p {font-size: 16px;}
  		.margin {margin-bottom: 30px;;}
		
		.error {color: #FF0000;}
		
		.bg-1 { 
    	background-color: #f5f7b9; /* Offwhite */
    	color: #ffffff;
  		}

  		.navbar {
    	padding-top: 15px;
    	padding-bottom: 15px;
    	border: 0;
    	border-radius: 0;
    	margin-bottom: 0;
    	font-size: 12px;
    	letter-spacing: 5px;
  		}
		
		.navbar-nav  li a:hover {
    	color: #1abc9c !important;
 		}
 		
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
		select { 
			width: 50%;
	  		padding: 15px;
	  		margin: 5px 0 22px 0;
	  		display: inline-block;
	  		border: none;
	  		background: #f1f1f1;
		}

  		</style>
	</head>
	<body style="background-color: #f5f7b9;">
		

		<div class="text-center">
  			<center><h1 class="margin">Sign up to get free quotes</h1>
  			<hr style="width: 50%">
  			<form method="POST">
  				@csrf
	  			<br><label for="stype"><b>Select the type of Design & Creative work you need</b></label></br>
	  			<select name="s1" id="s1">
	  				<option value="Brand Identity & Strategy">Brand Identity & Strategy</option>
	  				<option value="Voice Talent">Voice Talent</option>
	  				<option value="Animation">Animation</option>
	  				<option value="Physical Design">Physical Design</option>
	  				<option value="Presentation Design">Presentation Design</option>
	  				<option value="Graphics & Design">Graphics & Design</option>
	  				<option value="Motion Graphics Design">Motion Graphics Design</option>
	  				<option value="Art & Illustration">Art & Illustration</option>
	  				<option value="Audio Production">Audio Production</option>
	  				<option value="Photography">Photography</option>
	  				<option value="Video Production">Video Production</option>
	  			</select>

	  			<br><label for="lname"><b>Select your estimated scope of worke</b></label></br>
	    		<select name="s2" id="s2">
	    			<option value="Complex project"><b>Complex project</b><br>
							Find specialized experts and agencies for large projects.</option>
					<option value="Longer-term contract"><b>Longer-term contract</b><br>
							Find a skilled resource for an extended engagement.</option>
					<option value="Short term"><b>Short term</b><br>
							Find the right talent for short-term work.</option>
	    		</select>

	    		<br><label for="email"><b>Select your estimated project duration</b></label></br>
		    	<select name="s3" id="s3">
	    			<option value="More than 6 months">More than 6 months</option>
					<option value="3 to 6 months">3 to 6 months</option>
					<option value="1 to 3 months">1 to 3 months</option>
	    		</select>

	  			<br><label for="name"><b>First Name</b></label></br>
		    	<input type="text" placeholder="First Name" name="fname" id="fname" required>

	  			<br><label for="lname"><b>Last Name</b></label></br>
	    		<input type="text" placeholder="Last Name" name="lname" id="lname" required>

	    		<br><label for="email"><b>Work email address</b></label></br>
		    	<input type="email" placeholder="Work email address" name="email" id="email" required>
	    		
	    		<hr style="width: 50%">

	    		<button type="submit" class="registerbtn">Sign Up For Free</button>

	    		<center>Already have an account? <a href="/home/login">Log in</a></center>
    		</form>
  			</center>
		</div>

	</body>

</html>