<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<form action="{{ route('adminstore') }}" method="POST">
		@csrf

		<input type="text" name="title" class="form-control" placeholder="პროდუქტი ₾" style="margin: 15px; width: 500px;">
		<input type="numbers" name="price" class="form-control" placeholder="ფასი ₾" style="margin: 15px; width: 500px;">
		<textarea name="description" class="form-control" placeholder="პროდუქტის აღწერა" style="margin: 15px"></textarea>

		<form action="upload.php" method="post" enctype="multipart/form-data">
  ფოტოს დამატება:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <button class="btn btn-primary">დამატება</button>

</form>




		
	</form>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>