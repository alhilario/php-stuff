<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $codinova = array();
    array_push($codinova, "Welling");
    array_push($codinova, "Ariel");
    array_push($codinova, "Anthuan");
    array_push($codinova, "Waldo");
    array_push($codinova, "Alvaro");
	// Sort the list
    sort($codinova);
	// Randomly select a winner!
    $winner = strtoupper($codinova[rand(0, count($codinova))]);
	// Print the winner's name in ALL CAPS
	echo $winner;
	?>
	</p>
</html>
