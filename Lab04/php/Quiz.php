<?php

function checkAnswer ( $num, $question, $userAnswer, $category )
{
	$answers = array( 
		"apple" 	=> "red",
		"banana" 	=> "yellow",
		"pear" 		=> "green",
		"cashew" 	=> "brown",
		"blueberry" => "blue"
	);
	
	echo "Question $num: $question <br>\n";
	echo "You answered: $userAnswer <br>\n";
	$answer = $answers[ $category ];
	echo "Correct answer: $answer <br>\n<br>\n";
	if( $answer == $userAnswer)	{	return 1; 	}
	else						{	return 0;	}
}

$total = 5;
$correct = 0;

$correct += checkAnswer( 1, "What color is the apple?",      $_POST["apple"],     "apple" );
$correct += checkAnswer( 2, "What color is the banana?",     $_POST["banana"],    "banana");
$correct += checkAnswer( 3, "What color is the pear?",       $_POST["pear"],      "pear"  );
$correct += checkAnswer( 4, "What color is the cashew?",     $_POST["cashew"],    "cashew"  );
$correct += checkAnswer( 5, "What color is the blue berry?", $_POST["blueberry"], "blueberry"  );

$score = 100 * $correct / $total;
echo"You got |$correct| right out of |$total| for a score of %$score.<br>\n";

?> 
