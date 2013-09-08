<html>
    <p>
	<?php
	    $codinova = array();
	    array_push($codinova, "Welling");
	    array_push($codinova, "Ariel");
	    array_push($codinova, "Anthuan");
	    array_push($codinova, "Waldo");
	    array_push($codinova, "Alvaro");
	
	    sort($codinova);
		
	    $winner = strtoupper($codinova[rand(0, count($codinova))]);
	
	    echo $winner;
	?>
    </p>
</html>
