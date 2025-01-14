
if(oPlayerProperties.playersHp == 0)
	show_message("Game Over");
else
	switch(type){
		case "prime":
			if(isCorrect){
				show_debug_message("[ PT Feedback Flag Change]");
				oLogicSpawner.divisionAlternativesCreation = true;
				oLogicSpawner.subDivisionAnswered = true;	
			}
			else{
				oLogicSpawner.primeAlternativesCreation = true; // Will repeat the question/exersise.
			}
		break;
		
		case "division":
			show_debug_message("[ DT Feedback Flag Change]");
			var localDivCounter = oLogicSpawner.divisionCounter;
			oLogicSpawner.divisionCounter++;
			
			if(oLogicSpawner.divisionCounter <= 2) // Only if the the divisionCounter (number of subdivision exersise) is less equel or less than, the alarm is triggered
				oLogicSpawner.alarm[1] = room_speed*1;
			else{ // Alarm isn't triggered because the 2 division subexersises have been done.
				oLogicSpawner.divisionCounter = 1; // Division subexersise counter reseted.
				oLogicSpawner.divisionAlternativesCreation = false; // No more divsision alternatives are created.
				oLogicSpawner.primeAlternativesCreation = true; // Time to create prime alternatives.
			}
			break;
			
		case "multiplying":
			show_debug_message("[ MT Feedback Flag Change]");
			if(ds_list_size(oTable._tableDivisors) == 1){ // Only one result. Round finished.
				oTable.alarm[0] = room_speed*1;
			}
			oLogicSpawner.multiplyAlternativesCreation = true;
			break;
	}