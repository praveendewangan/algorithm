<?php
// 12345, 54321

$num = 12345;
echo $num."<br>";
$rev = 0;
while($num >= 1)
{
	$a = $num%10;
	$rev = $rev*10+$a;
	//echo $a;
	$num = $num/10;
}
echo $rev;

?>