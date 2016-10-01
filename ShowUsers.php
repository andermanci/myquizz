<?php
	$link = mysqli_connect("mysql.hostinger.es","u883675844_urtzi","Otamendi","u883675844_quizz");

	$ema = mysqli_query($link,"select * from Erabiltzaile");

	echo '<table border=1> <tr> <th> IZENA </th> <th> ABIZENAK </th>  <th> EMAILA </th> </tr>';

	while( $row=mysqli_fetch_array($ema,MYSQLI_ASSOC)) {
		echo '<tr><td>'.$row['Izena'].'</td><td>'.$row['Abizena'].'</td><td>'.$row['Email'].'</td></tr>';
	}	 

	echo '</table>';
	mysqli_free_result($ema);
	mysqli_close($link);
?>	 