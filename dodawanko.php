<?php
	$link=mysqli_connect('localhost','root','','projektpki');
	mysqli_select_db($link,'projektpki');
	$StudentID=$_POST['StudentID'];
	$Uczelnia=$_POST['Uczelnia'];
	$Rodzaj=$_POST['Rodzaj'];
	$Stopien=$_POST['Stopien'];
    $wynik=mysqli_query($link, "select * from studenci");
    	$dodaj=mysqli_query($link,"insert into studenci values ('$StudentID','$Uczelnia','$Rodzaj','$Stopien')");
    	header('Location:studenci.php');
?>