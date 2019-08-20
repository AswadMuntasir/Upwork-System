<!DOCTYPE html>
<html>
<head>
	<title>Hire Freelancers. Make Things Happens | Upwork</title>
	<style>
		
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<div class="container box">
			<h3 align="center">Live search</h3><br />
				<div class="panel panel-default">
					<div class="panel-heading">Search Job Data</div>
						<div class="panel-body">
							<div class="form-group">
								<input type="text" name="search" id="search" class="form-control" placeholder="Search Job Data" />
							</div>
							<div class="table-responsive">
							<h3 align="center">Total Data : <span id="total_records"></span></h3>
							<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>title</th>
									<th>description</th>
									<th>payment</th>
									<th>completeday</th>
									<th>status</th>
									<th>client</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<h1><a href="/home">Home</a></h1>
	</center>
	<br><br>
</body>
</html>
<script>
	$(document).ready(function(){

		fetch_customer_data();

		function fetch_customer_data(query = '')
		{
			$.ajax({
				url:"{{ route('home.livejobsearch') }}",
				method:'GET',
				data:{query:query},
				dataType:'json',
				success:function(data)
				{
					$('tbody').html(data.table_data);
					$('#total_records').text(data.total_data);
				}
	  		})
		}
		$(document).on('keyup', '#search', function(){
			var query = $(this).val();
			fetch_customer_data(query);
		});
	});
</script>