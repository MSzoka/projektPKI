<?php
	$link=mysqli_connect('localhost','root','','projektpki');
	mysqli_select_db($link,'projektpki');
	$StudentID=$_POST['StudentID'];
    $wynik=mysqli_query($link, "select * from studenci where StudentID='$StudentID'");
    $zmiana=mysqli_fetch_row($wynik);

    if($_POST)
    {
        $StudentID=$_POST['StudentID'];
    	$Uczelnia=$_POST['Uczelnia'];
    	$Rodzaj=$_POST['Rodzaj'];
    	$Stopien=$_POST['Stopien'];

    	$q = mysqli_query($link, "update studenci set Uczelnia='$Uczelnia',Rodzaj='$Rodzaj',Stopien='$Stopien' where StudentID='$StudentID'");
        header('Location:studenci.php');
    }