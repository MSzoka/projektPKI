<?php
	$link=mysqli_connect('localhost','root','','projektpki');
	mysqli_select_db($link,'projektpki');
	$StudentID=$_POST['StudentID'];
    $wynik=mysqli_query($link, "select * from studenci where StudentID='$StudentID'");

    if(mysqli_num_rows($wynik)>0)
    {
    	$usun=mysqli_query($link,"delete from studenci where StudentID='$StudentID'");
    	header('Location:studenci.php');
    }
?>