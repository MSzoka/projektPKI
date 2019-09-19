<?php 
require_once('rejestracjaa.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Zaloz konto</title>
		<style>
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<?php
	if(isset($_POST['Zaloz'])) {

		$wszystko_OK=true;
		$Login = $_POST['Login'];
		if ((strlen($Login)<3) || (strlen($Login)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($Login)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		$Haslo = $_POST['Haslo'];
		$Mail=$_POST['Mail'];
		$MailB = filter_var($Mail, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($MailB, FILTER_VALIDATE_EMAIL)==false) || ($MailB!=$Mail))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		//Sprawdź poprawność hasła
		$Haslo = $_POST['Haslo'];
		$Haslo1 = $_POST['Haslo1'];
		
		if ((strlen($Haslo)<8) || (strlen($Haslo)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($Haslo!=$Haslo1)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		if($wszystko_OK==true){
		$sql="INSERT INTO uzytkownicy (Login,Haslo,Mail) values (?,?,?)";
		$stmtins = $db->prepare($sql);
		$result=$stmtins->execute([$Login,$Haslo,$Mail]);
		if($result){
			header('Location: strona.php');
		}else{
			echo "Podaj wszystkie dane";
		}
	}
	}
	?>
	<form action="rejestracja.php" method="post">
			<h1>Rejestracja</h1>
			<p>Wypelnij wszystkie pola wlasciwymi wartosciami</p>
			Login: <br><input type="text" class="form-control" name="Login" required>
			<br>
			<?php
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
			?>
			Mail: <br><input type="text" class="form-control"  name="Mail" required>
			<br>
			<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
			Haslo: <br><input type="password" class="form-control" name="Haslo" required>
			<br>
			<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>	
			Powtorz Haslo: <br><input type="password" class="form-control" name="Haslo1" required>
			<br>
			
			<input type="submit" name="Zaloz" class="btn btn-success" value="Zaloz">
		</form>
</body>
</html>