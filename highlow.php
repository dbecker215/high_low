<?php
/*
Test inputs
*/
if($argc == 3){
	if(is_numeric($argv[1]) && is_numeric($argv[2])) {
		if($argv[1] < $argv[2]){
			$min = $argv[1];
			$max = $argv[2];
		} else{
			$min = $argv[2];
			$max = $argv[1];
		}
			/*
			Initialize game
			*/
		do{
			fwrite(STDOUT, 'Want to play a game? ');

			// Get the input from user
			$answer = trim(fgets(STDIN));
			// Output the user's name
			if(strtolower($answer) == 'yes'){
				fwrite(STDOUT, "Great! Let's play!\n");
			} else{
				echo "Too bad, play anyways!\n";
			}
			 fwrite(STDOUT, "Please guess a number between $min and $max. " );

			// variables
			$guess = trim(fgets(STDIN));
			$random = mt_rand($min, $max);
			$count = 1;
			
				if($guess == $random){
					echo "Great guess! The answer was $random! It took you $count guesses! \n";
				}else{
					do{
						if (($guess < $random) && (is_numeric($guess))) {
							fwrite(STDOUT, 'Higher ');
						} elseif (($guess > $random) && (is_numeric($guess))){
							fwrite(STDOUT, 'Lower ');
						}else{
							fwrite(STDOUT, "You must use integers!\n" );
							fwrite(STDOUT, "FAIL!\n");
							fwrite(STDOUT, "Start Over Now.\n" );
							fwrite(STDOUT, 'Want to play again? ');
							$answer = trim(fgets(STDIN));
							break;
							// $restart = true;
						}
						$guess = trim(fgets(STDIN)); 
						$count++;
					}
					while ($guess != $random);
					if($guess == $random){
						echo "Great guess! The answer was $random! It took you $count guesses! \n";
					}	
			}
		}while(strtolower($answer) == 'yes' || strtolower($answer) != 'no');
			// fwrite(STDOUT, "You must use integers!\n" );
			// fwrite(STDOUT, "FAIL!\n");
			// fwrite(STDOUT, "Start Over Now, by hitting 'Ctrl C'\n" );
			// $restart = true;
		}
	} else {
		fwrite(STDOUT, "You must have 3 arguments total!\n" );
}

