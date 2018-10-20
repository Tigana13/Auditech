<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>View Upload</title>	
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  	.wrapper{
  		margin: 0 auto;
  		width: 75%;
  		margin-top: 10px;
  	}

  </style>
</head>
<body>
	<div class="wrapper">

		<section class="panel panel-primary">
			<div class="panel-heading">
				View Uploads Page
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>Title</th>
						<th>Upload date</th>
						<th>Action</th>
					</thead>
					<tbody>

						@foreach($downloads as $down)

						<tr>
							<td>{{$down->name}}</td>
							<td>{{$down->created_at	}}</td>
							<td>
							<a href="{{url('/storage/uploads/'.$down->name)}}"
								download="{{$down->name}}">
								<button type="button" class="btn btn-primary">
									<i class="glyphicon glyphicon-download-alt">
										Download
									</i>
								</button>
							</a>
						</td>
						</tr>	

						@endforeach					
					</tbody>
				</table>
			</div>
			

		</section>
			
		</div>
		


	</div>	

</body>
</html>	
