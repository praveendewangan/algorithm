<?php
$a = [1,2,4,6,3,4,5];

for($i=0;$i<(count($a)-1);$i++)
{
	for($j=0;$j<(count($a)-1-$i);$j++)
	{
		if($a[$j]<$a[$j+1])
		{
			$temp = $a[$j];
			$a[$j] = $a[$j+1];
			$a[$j+1] =$temp;
		}
	}
}
print_r($a);

$num = 12345;
echo "<br>".strrev($num);
?>