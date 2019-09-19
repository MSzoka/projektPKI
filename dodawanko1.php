<?php
	$link=mysqli_connect('localhost','root','','projektpki');
	mysqli_select_db($link,'projektpki');
	$StudentID=$_POST['StudentID'];
	$Imie=$_POST['Imie'];
	$Nazwisko=$_POST['Nazwisko'];
	$ID=$_POST['ID'];
    $wynik=mysqli_query($link, "select * from dane");
    	$dodaj=mysqli_query($link,"insert into dane values ('$StudentID','$Imie','$Nazwisko','$ID')");
    	header('Location:dane.php');
?>