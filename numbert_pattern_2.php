<?php
/*  1
	12
	123
	1234
	12345   */
	
	$num = 5;
	for($i=1;$i<=$num;$i++)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo $j;
		}
		echo "<br>";
	}
	echo "<br><br><br>";
	
	for($i=1;$i<=$num;$i++)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo $i;
		}
		echo "<br>";
	}
?>