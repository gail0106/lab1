<?php
	echo"Grade Assessment! <br>";
	$grade = 74;

	echo "Grade: $grade <br>";
	if($grade >= 75){
		 echo "You PASSED. Congratulations! <br>";

		 if($grade >= 90){
			 echo "With Honors <br>";
		 }
	}
	else{
		echo "You FAILED. Better luck next time.";
	}
?>