
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>

	<h2>Details</h2>

	<a href="{{route('home')}}">Back</a> |
	<form method="GET">
		<table width="80%" align="center" border="0">
			<tr align="center">
				<td>First Name</td>
				<td>{{$users['fname']}}</td>
			</tr>
			<tr align="center">
				<td>Last Name</td>
				<td>{{$users['lname']}}</td>
			</tr>
			<tr align="center">
				<td>Location</td>
				<td>{{$users['location']}}</td>
			</tr>
			<tr align="center">
				<td>Details</td>
				<td>{{$users['details']}}</td>
			</tr>
			<tr align="center">
				<td>Earned money</td>
				<td>{{$users['money']}}</td>
			</tr>
			<tr align="center">
				<td>Hourly rate</td>
				<td>{{$users['rate']}}</td>
			</tr>
			<tr align="center">
				<td>Jobs</td>
				<td>{{$users['jobs']}}</td>
			</tr>
			<tr align="center">
				<td>Hours worked</td>
				<td>{{$users['worked']}}</td>
			</tr>
			<tr align="center">
				<td>Skills</td>
				<td>{{$users['skills']}}</td>
			</tr>
		</table>
	</form>

	<br><br><br>

	<center><h2>Working history</h2></center>
	<form method="GET">
		<select>
			<option value="new">New</option>
			<option value="old">Old</option>
		</select>
		<table width="80%" align="center" border="0">
			<tr align="center">
				<td>Name</td>
				<td>{{$users['name']}}</td>
			</tr>
			<tr align="center">
				<td>Rate</td>
				<td>{{$users['rate']}}</td>
			</tr>
			<tr align="center">
				<td>Money</td>
				<td>{{$users['money']}}</td>
			</tr>
			<tr align="center">
				<td>Details</td>
				<td>{{$users['details']}}</td>
			</tr>
		</table>
	</form>
	
</body>
</html>