<?php
$a = [1,200,0,2,5,3,99,4,];
$count = count($a);
$b = $a[0];
for($i=1;$i<$count;$i++)
{
	if($a[$i]<$b)
	{
		
	}
	else
	{
		$b = $a[$i];
	}
}
echo $b;
?>