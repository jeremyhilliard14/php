<!DOCTYPE html>
<html>
<head>
	<title>Dice Game</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

	<div id="container">

		<div class="header">
			<h1>You have encountered a dragon!</h1>
		</div>
		
		<div id="dragon">
			<img src="dragon.png">
		</div>
		
		<div id="flee">
			<img src="fleeing.png">
		</div>
		
		<div class="instructions">
			<h3>You have a choice!  You can either fight the dragon or turn tail and RUN!!!</h3>
		</div>
		<div class="fight">
				<h2>Fight!</h2>
				<p>If you choose to fight you put your fate in the dice!<br>You must roll a 9 or higher or you will BURN! <br>Roll the dice to see if you make it out alive!</p>
				<?php print"<a href='/'><button>FIGHT</button></a>"; ?>

			
		</div>

		<div id="the-fight">
			<img src="d1.gif" name="myDie1">
			<img src="d2.gif" name="myDie2">

		</div>

		<div id="counter1">

		</div>

		<div class"flight">
			<h2>Flight!</h2>
				<p>If you choose to flee press the button below!</p>
				<button type="button"onclick="show('flee');">RUN!!!!!!</button>
		
		</div>

	
	</div>
</body>
</html>