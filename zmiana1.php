<?php
	$link=mysqli_connect('localhost','root','','projektpki');
	mysqli_select_db($link,'projektpki');
	$StudentID=$_POST['StudentID'];
    $wynik=mysqli_query($link, "select * from dane where StudentID='$StudentID'");
    $zmiana=mysqli_fetch_row($wynik);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
		<form action="zmienianko1.php" method="post">
		 <br/> <input type="hidden" value="<?php echo $zmiana[0]?>" name="StudentID"><br>
		Imie: <br/> <input type="text" value="<?php echo $zmiana[1]?>" class="form-control" name="Imie" required><br>
		Nazwisko: <br/> <input type="text" value="<?php echo $zmiana[2]?>" class="form-control" name="Nazwisko" required><br>
		ID: <br/> <input type="text" value="<?php echo $zmiana[3]?>" class="form-control" name="ID" required><br>
		<br>
		<input type="submit" value="Zmien" class="btn btn-success">
		</form>

</body>
</html>