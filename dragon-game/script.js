
	
	function throwDice(){
		var randomDie = Math.round(Math.random() *5)+1; //This will produce a number between 1 and 6.
		var imageName = "d" + randomDie + ".gif";
		document.images['myDie1'].src = imageName;

		randomDie2 = Math.round(Math.random() *5)+1; 
		var imageName2 = "d" + randomDie2 + ".gif";
		document.images['myDie2'].src = imageName2;

		console.dir(document.images);

		var dieTotal = randomDie + randomDie2;

		//var dragonHitPoints = 20;
		//var playerHitPoints = 20;
	 	//while(dragonHitPoints > 0){
	 	//var remDragonPoints = dragonHitPoints-dieTotal;
	 	//document.write(remDragonPoints);
	 //}
	 //	while(playerHitPoints>0){
	 //	var remPlayerPoints = playerHitPoints-dieTotal;
	 //	document.write(remPlayerPoints);
	 //}

		if (dieTotal < 9) {
			alert("You rolled a " + dieTotal + "." + " You have been burnt to a crisp!  Better luck next time!");
		} else{
			alert("Congratulations!  You rolled a " + dieTotal + "." + " You beat the dragon!");
		}
	}

	function show(elementId) { 
 		document.getElementById("flee").style.display="none";
 		document.getElementById(elementId).style.display="block";
	}

	

	

