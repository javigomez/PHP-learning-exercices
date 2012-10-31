<?php

function sortArray( $array_ints )
{	
	// Temporal array to be sorted
	$sorted_array	= $array_ints;
	
	// Length of the passed array
	$array_lenght = count($sorted_array);
	
	// Loop through every element against all others NxN
	for( $i =0; $i < ($array_lenght-1); $i++)
	{
		// This loop compares each element against its next element
		foreach ($array_ints as $key => $value)
		{
			
			$current_element	= $sorted_array[$key];
			$next_element		= $sorted_array[$key+1];
			
			// If the next element is not null, meaning that is the last in the array
			// and the current element is bigger than the next, then switch them			
			if ($next_element !== null && $current_element > $next_element)
			{
				// next element become the current
				$sorted_array [$key] 	= $next_element;
				// the current element goes to next position in array
				$sorted_array [$key+1] 	= $current_element;
				
				// Echo the changes
				echo "<br>I=$i key=$key: " . implode($sorted_array, ', ');

			}
					
		}
	}
	return $sorted_array;
}

/*
 * EXERCICE 1:
 * Sort this array of int numbers: array(5,4,3,2,1)
 * 
 * Note: do not use the PHP function sort()
 */
 
$array_ints = array(5,4,3,2,1);
echo "<br> The array : " . implode($array_ints, ', ');

$sorted_array = $array_ints;
sortArray($array_ints);

?>
