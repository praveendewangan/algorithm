<?php
$num = 4;
$count = 0;
for($i=1;$i<=$num;$i++)
{
	$a = $num%$i;
	if($a == 0)
	{
		$count++;
	}
}
if($count == 2 or $count == 1)
{
	echo "Prime number";
}
else
{
	echo "Not a prime number";
}
?>