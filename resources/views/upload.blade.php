<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Auditech Upload</title>	
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	<br>
	<div class="col-lg-offset-4 col-lg-4"></div>
	<center><h1>Upload a File</h1></center> 
	<form action="{{route('upload.post')}}" enctype="multipart/form-data" method="post">
		{{csrf_field()}}
		<input type="file" name="image">
		<br>
		<input type="submit" value="upload">
	</form>
</body>
</html>	
