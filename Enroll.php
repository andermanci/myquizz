
<?php
	$link = mysqli_connect("mysql.hostinger.es","u562857369_ander","mancisidor","u562857369_quizz");
	$sql = "INSERT INTO Erabiltzaile VALUES ('$_POST[izen]','$_POST[abizen]','$_POST[email]','$_POST[pass]','$_POST[tfl]','$_POST[Adarra]','$_POST[gehigarria]','$_POST[argazkia]')";
	$ema = mysqli_query($link,$sql);
	if (!$ema){ 
		die('Errorea query-a gauzatzerakoan: ' . msqli_error());
	}
	echo "Erregistro bat gehitu da";
	echo "<p> <a href='ShowUsers.php'> Erregistroak ikusi</a>";
	mysqli_close($link);
?>





