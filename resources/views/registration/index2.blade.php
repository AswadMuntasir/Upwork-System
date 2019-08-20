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

		input[type=country], input[type=password], input[type=username] {
  		width: 50%;
  		padding: 15px;
  		margin: 5px 0 22px 0;
  		display: inline-block;
  		border: none;
  		background: #f1f1f1;
		}

		input[type=country]:focus, input[type=password]:focus, input[type=username]:focus {
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
  			<center><h1 class="margin">Complete your free account setup</h1>
	  			<hr style="width: 50%">
	  			<form method="POST">
	  				@csrf
		  			<br><label for="country"><b>Country</b></label></br>
			    	<select name="country" id="country">
			    		<option value="Afghanistan">Afghanistan</option>
						<option value="Antarctica">Antarctica</option>
						<option value="Argentina">Argentina</option>
						<option value="Australia">Australia</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Belgium">Belgium</option>
						<option value="Bermuda">Bermuda</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Brazil">Brazil</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canadaa">Canada</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Colombia">Colombia</option>
						<option value="Congo">Congo</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Denmark">Denmark</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="Finland">Finland</option>
						<option value="French">French</option>
						<option value="Germany">Germany</option>
						<option value="Greece">Greece</option>
						<option value="Haiti">Haiti</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
			    	</select>

		  			<br><label for="password"><b>Password</b></label></br>
		    		<input type="password" placeholder="Last Name" name="password" id="password">

		    		<br><label for="username"><b>User name</b></label></br>
			    	<input type="username" placeholder="Work uname address" name="username" id="username">
			    	
			    	<br><label for="option"><b>I want to</b></label></br>
			    	<select name="type" id="type">
			    		<option value="freelancer">Work as a freelancer</option>
			    		<option value="hierer">Hier for a project</option>
			    	</select>

			    	<br>{{session('msg')}}
		    		
		    		<hr style="width: 50%">
			    	<p>By creating an account, you agree to our <a href="#">Terms & Privacy</a>.</p>

		    		<button type="submit" class="registerbtn" onclick="registrationButton">Register</button>
    			</form>
  			</center>
		</div>

	</body>

</html>