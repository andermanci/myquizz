<?php
	$link = mysqli_connect("mysql.hostinger.es","u562857369_ander","mancisidor","u562857369_quizz");

	$ema = mysqli_query($link,"select * from Erabiltzaile");

	echo '<table border=1> <tr> <th> IZENA </th> <th> ABIZENAK </th> <th> EPOSTA 
		  </th> <th> PASAHITZA </th> <th> TELEFONOA </th> <th> ADARRA </th> <th> 
		  GEHIGARRIA </th> <th> ARGAZKIA </th> </tr>';

	while( $row=mysqli_fetch_array($ema,MYSQLI_ASSOC)) {
		echo '<tr><td>'.$row['Izena'].'</td><td>'.$row['Abizena'].'</td><td>'.$row['Email'].'</td><td>'.
			 $row['Pasahitza'].'</td><td>'.$row['Telefonoa'].'</td><td>'.$row['Adarra'].'</td><td>'.
			 $row['Gehigarriak'].'</td><td>'.$row['Argazkia'].'</td></tr>';
	}	 

	echo '</table>';
	mysqli_free_result($ema);
	mysqli_close($link);
?>	 