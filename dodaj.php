<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	Podaj dane
	<form action= "dodawanko.php" method="post">
		ID: <br/> <input type="text" class="form-control" name="StudentID" required><br>
		Uczelnia: <br/> <input type="text" class="form-control" name="Uczelnia" required><br>
		Rodzaj: <br/> <input type="text" class="form-control" name="Rodzaj" required><br>
		Stopien: <br/> <input type="text" class="form-control" name="Stopien" required><br>
		<br>
		<input type="submit" name="Usun" class="btn btn-success">
	</form>
</body>
</html>