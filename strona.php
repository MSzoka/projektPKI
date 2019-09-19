<?php
	$link=mysqli_connect('localhost','root','','projektpki');
	mysqli_select_db($link,'projektpki');
    $wynik=mysqli_query($link, "show tables");
?>


<!DOCTYPE html>
<html lang="pl">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>Projekt</title>
</head>
<body>
<h1> Tabele w bazie: </h1>
<form id="form1" name="form1" method="get" action="wybor.php">
<select class = "form-control" name="filler">
	<?php
		while ($rows=mysqli_fetch_assoc($wynik))
		 {
		 ?>
		 	<option value="<?php echo $rows['Tables_in_projektpki']?>" name="dane"><?php echo $rows['Tables_in_projektpki']?></option>
		<?php
		 }
		?>
	</select>
	<br>
<input type="submit" value="submit" class="btn btn-success">
</form>
</body>
</html>