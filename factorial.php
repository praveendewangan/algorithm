<?php
/* $num = 6;
for($i=$num-1;$i>=1;$i--)
{
	$num *=$i;
}
echo $num;
echo "<br>or<br>";
$var = 5;
$a = $var;
function fun($num)
{ 
	if($num == 1)
		return;
	GLOBAL $a;
	$a *=($num-1);
	fun($num-1); 
}
fun($var);
echo $a; */
echo "<br>";
$n = 7;
//const x = 5;
define('x',$n);
function fact($n)
{
	static $total = x;
	if(($n-1) == 0)
	return $total;
	$total *= $n-1;
	return fact($n-1);
	
}

echo $a = fact($n);
?>