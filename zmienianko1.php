<?php
	$link=mysqli_connect('localhost','root','','projektpki');
	mysqli_select_db($link,'projektpki');
	$StudentID=$_POST['StudentID'];
    $wynik=mysqli_query($link, "select * from dane where StudentID='$StudentID'");
    $zmiana=mysqli_fetch_row($wynik);

    if($_POST)
    {
        $StudentID=$_POST['StudentID'];
    	$Imie=$_POST['Imie'];
    	$Nazwisko=$_POST['Nazwisko'];
    	$ID=$_POST['ID'];

    	$q = mysqli_query($link, "update dane set Imie='$Imie',Nazwisko='$Nazwisko',ID='$ID' where StudentID='$StudentID'");
        header('Location:dane.php');
    }