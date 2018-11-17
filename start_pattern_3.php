<?php
/*  *****
	 ***
	  * */
	
	$num = 5;
	for($i=$num;$i>=1;$i--)
	{
		$a = $num - $i;
		for($k=1;$k<=$a;$k++)
		{
			echo "&nbsp;";
		}
		for($j=1;$j<=$i;$j++)
		{
			echo "*";
		}
		echo "<br>";
	}
	
	echo "<br><br><br>";
	
	for($i=1;$i<=$num;$i++)
	{
		$a = $num - $i;
		for($k=1;$k<=$a;$k++)
		{
			echo "&nbsp;";
		}
		for($j=1;$j<=$i;$j++)
		{
			echo "*";
		}
		echo "<br>";
	}
	for($i=$num-1;$i>=1;$i--)
	{
		$a = $num - $i;
		for($k=1;$k<=$a;$k++)
		{
			echo "&nbsp;";
		}
		for($j=1;$j<=$i;$j++)
		{
			echo "*";
		}
		echo "<br>";
	}
?>