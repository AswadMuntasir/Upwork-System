<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registration</title>
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


  		</style>
	</head>
	<body style="background-color: #f5f7b9;">
		

		<div class="text-center">
  			<center><h1 class="margin">Get your free account</h1>
	  			<hr style="width: 50%">
		  		<form method="POST">
		  			@csrf
		  			<br><label for="fname"><b>First Name</b></label></br>
			    	<input type="text" placeholder="First Name" name="fname" id="fname" required>

		  			<br><label for="lname"><b>Last Name</b></label></br>
		    		<input type="text" placeholder="Last Name" name="lname" id="lname">

		    		<br><label for="email"><b>Work email address</b></label></br>
			    	<input type="email" placeholder="Work email address" name="email" id="email">

			    	<br>
			    	{{session('fnmsg')}}
		    		{{session('lnmsg')}}
		    		{{session('emsg')}}
		    		<hr style="width: 50%">
			    	<p>By creating an account, you agree to our <a href="#">Terms & Privacy</a>.</p>

		    		<button type="submit" class="registerbtn" onclick="registrationButton">Register</button>
	    		</form>
  			</center>
		</div>
	</body>
</html>