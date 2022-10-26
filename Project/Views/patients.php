<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Patient search</title>
</head>
<body>
	<div class="jumbotron text-center">
		<h2>Patient search in database</h2>
	</div>
	<div class="container">
		<div class=row>
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="search">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Patient id</th>
							<th>Disease</th>
						</tr>
					</thead>
					<tbody id="output">
					<tr>
						<td>John</td>
						<td> Alfred</td>
						<td>001</td>
						<td>Diabetis</td>
					</tr>
					<tr>
						<td>Lidya</td>
						<td> Gomes</td>
						<td>002</td>
						<td>Kidney desease</td>
					</tr>
					<tr>
						<td>Thomas</td>
						<td> Shelby</td>
						<td>003</td>
						<td>Depression</td>
					</tr>
				</tbody>
				</table>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(documents).ready(function(){
			$("#search").keypress(function(){
				$.ajax({
					type:'POST',
					url:'search.php',
					data:{
						name:$("#search").val(),
					},
					success:function(data){
						$("#output").html(data);
					}

				});

			});
		});

	</script>

</body>
</html>