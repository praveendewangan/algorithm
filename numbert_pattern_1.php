<?php
/*  12345
	1234
	123
	12
	1   */
	
	$num = 5;
	for($i=$num;$i>=1;$i--)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo $j;
		}
		echo "<br>";
	}
?>