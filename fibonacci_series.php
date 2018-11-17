<?php
// 0,1,1,2,3,5,8,13,21,34

for($i=0;$i<8;$i++)
{
	if($i<1)
	{
	echo $i.', ';
	echo $i+1;
	echo ", ";
	$a = $i;
	$b = $i+1;
	}
	$c =$a+$b;
	echo $c.', ';
	$a=$b;
	$b=$c;
}

?>