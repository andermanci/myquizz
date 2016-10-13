<html>
  <head>
    <style>
      body {
        background-color: #FFE4B5;
      }
      fieldset{
        -moz-border-radius:5px;  
        border-radius: 15px;  
        -webkit-border-radius: 5px;
        background-color: white;  
        border: 0;
      }
      legend {
        font-weight: bold;
      }
    </style> 
  </head>

  <body>
  	<form id="login" name="login" method="post" action="SignIn.php">

  		<div align="center">
  		<fieldset>
  		<legend align="center">Logeatu</legend>	

  		<br>
  		
  		<input type="text" name="email" placeholder="Posta elektronikoa"><br><br>
  		<input type="password" name="pass" placeholder="Pasahitza"><br><br>
  		
   

		  <input name="Submit" type="submit" value="Logeatu"><br><br>
  		
  		</fieldset><br><br>
  		<span><a href='layout.html'>Atzera</a></span>
  		</div>
  		
	</form>
  </head>
</html>  		



<?php
	if(isset($_POST['email'],$_POST['pass'])){
		
		$link = mysqli_connect("mysql.hostinger.es","u562857369_ander","mancisidor","u562857369_quizz");
		$sql = "SELECT * FROM Erabiltzaile WHERE Email = '$_POST[email]' AND  Pasahitza = '$_POST[pass]'";
		$ema = mysqli_query($link,$sql);
		
		if(!($ema -> num_rows == 0)){

			header('Location:InsertQuestion.php');

		}else{



		}
		mysqli_close($link);
	}
	
?>