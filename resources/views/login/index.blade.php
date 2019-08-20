<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<form method="post">
			@csrf
			<font size="9"><center><p><b>Upwork Login Page</b></p></center></font>
			<br><br><br><br><br><br><br>
			<font size="6"><center><p>Login Here</p></center></font>
			<table width="300" height="100" border="0" align="center">
				<tr>
					<td>Name:
					</td>
					<td>
						<input type="text" name="username" placeholder="User name" required/>
					</td>
				</tr>
				<tr>
					<td>Password
					</td>
					<td>
						<input type="password" name="password" placeholder="Password" required/>
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						{{session('msg')}}
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						<input type="submit" name="login" value="Login"> <br><br>
						Don't have account? | <a href="/home/registration">Registration</a>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>