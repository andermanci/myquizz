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
  	<form id="erregistro" name="erregistro" onSubmit="return validate()" method="post" action="InsertQuestion.php" enctype="multipart/form-data">

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