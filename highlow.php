<?php

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'Want to play a game? ');

// Get the input from user
$answer = trim(fgets(STDIN));

// Output the user's name
if(strtolower($answer) == 'yes'){
	fwrite(STDOUT, "Great! Let's play!\n");
} else{
	echo "Too bad, play anyways!\n";
}
 fwrite(STDOUT, 'Please guess a number between 1 and 100. ' );

 $guess = (int) trim(fgets(STDIN));
 $random = rand(1, 100);
 $count =1;


while (is_int($guess)){
 while ($guess != $random){
 	if ($guess == $random){
 		echo "Great guess!!!";
	 	}else{
			if ($guess < $random){
				fwrite(STDOUT, 'Higher ');
				$guess = (int) trim(fgets(STDIN));
			} else {
				fwrite(STDOUT, 'Lower ');
				$guess = (int) trim(fgets(STDIN));
			}
		} ++$count;
}
echo "Great guess! The answer was $random! It took you $count guesses! \n";
break;
}
 



