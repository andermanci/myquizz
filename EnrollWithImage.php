
<?php
	$link = mysqli_connect("mysql.hostinger.es","u883675844_urtzi","Otamendi","u883675844_quizz");
	if (getimagesize($_FILES['argazkia']['tmp_name'])==FALSE) {
		echo "Errorea: Aukeratu argazkia.";
	}
	else{
		
		$nombre_img = $_FILES['argazkia']['name'];
		$directorio = $_SERVER['DOCUMENT_ROOT'].'/php/image/';
		move_uploaded_file($_FILES['argazkia']['tmp_name'],$directorio.$nombre_img);
	}
	$sql = "INSERT INTO Erabiltzaile VALUES ('$_POST[izen]','$_POST[abizen]','$_POST[email]','$_POST[pass]','$_POST[tfl]','$_POST[Adarra]','$_POST[gehigarria]','$nombre_img')";
	$ema = mysqli_query($link,$sql);
	if (!$ema){ 
		die('Errorea query-a gauzatzerakoan: ' .mysqli_error($link));
	}
	echo "Erregistro bat gehitu da";
	echo "<p> <a href='ShowUsersWithImage.php'> Erregistroak ikusi</a>";
	mysqli_close($link);
?>





