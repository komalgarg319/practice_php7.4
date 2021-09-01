<?php
// php program to print a
// pattern using single loop
// and continue statement

// printPattern function
// to print pattern
function printPattern($n)
{
	
	// Variable initialization
	$line_no = 1; // Line count

	// Loop to print desired pattern
	$curr_star = 0;
	for ($line_no = 1; $line_no <= $n;)
	{
		
		// If current star count is less
		// than current line number
		if ($curr_star < $line_no)
		{
			echo "* ";
			$curr_star++;
			continue;
		}

		// Else time to print
		// a new line
		if ($curr_star == $line_no)
		{
			echo "<br/>";
			$line_no++;
			$curr_star = 0;
		}
	}
}

	// Driver code
	$n=7;
	printPattern($n);

// This code is contributed by mits
?>
