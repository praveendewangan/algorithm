<?php

$num = 153;
$n = $num; 
$m = $num;
$sum = 0;
$count = 0;

while($n != 0)
{
	$n = (int)$n/10;
	if($n !=0)
	$count++;
}	
// $count = strlen($num);

function fun($n, $counter)
{
	$total = 1;
	$number = 0;
	while($number != $counter)
	{
		$total *= $n;
		$number++;
	}
	return $total;
}

while($m != 0)
{
	$a = $m%10;
	$sum = $sum + fun($a, $count);
	$m = $m/10;
}

if($num == $sum)
{
	echo "Number is armstrong number";
}
else 
{
	echo "Not an armstrong number";
}

?>