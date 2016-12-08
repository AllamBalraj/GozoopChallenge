<?php

class Lightbulbs{
	public function getSolution(){
		//fill array with default value false of size 100
		$bulbs = array_fill(0, 100, false);
		
		//main logic
		for ($i=1; $i < sizeof($bulbs); $i++) { 
			for ($j=0; $j < sizeof($bulbs); $j+=$i) { 
				$bulbs[$j] = !$bulbs[$j];	
			}
		}

		//array filter is used to filter only true values from the array.
		return count(array_filter($bulbs));
	}
}

$lightbulbs = new Lightbulbs();

echo "Number of switched on bulbs are ".$lightbulbs->getSolution().".";

?>