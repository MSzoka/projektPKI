<?php
	$link=mysqli_connect('localhost','root','','projektpki');
	mysqli_select_db($link,'projektpki');
    $wynik=mysqli_query($link, "select * from studenci");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<table align="center" border="1px" style="width: 600px; line-height: 40px;">
		<tr>
			<th colspan="4"><h2>Dane</h2></th>
		</tr>
		<t>
			<th>StudentID</th>
			<th>Uczelnia</th>
			<th>Rodzaj</th>
			<th>Stopien</th>
		</t>
		<?php
		while ($rows=mysqli_fetch_assoc($wynik))
		 {
		 ?>
		 <tr>
		 	<td><?php echo $rows['StudentID']?></td>
		 	<td><?php echo $rows['Uczelnia']?></td>
		 	<td><?php echo $rows['Rodzaj']?></td>
		 	<td><?php echo $rows['Stopien']?></td>
		 </tr>
		<?php
		 }
		?>
	</table>


	<form id = "form2" action="usun.php">
	<input type="submit" name="Usun" value="Usun" class="btn btn-danger ">
	</form>
	<br><br>
	<form id = "form3" action="dodaj.php">
		<input type="submit" name="Dodaj" value="Dodaj" class="btn btn-success">
	</form>
	<br><br>
	<form id = "form4" action="zmien.php">
		<input type="submit" value="Zmien" class="btn btn-warning">
	</form>
	<br><br>
	<form id = "form5" action="strona.php">
		<input type="submit" value="Powrot" class="btn btn-primary">
	</form>

</body>
</html>
