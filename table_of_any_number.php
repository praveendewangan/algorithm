<?php
function table($mul,$num)
{
	echo $num.'x'.$mul.' = '.$num*$mul."<br>";
	if($mul == 10)
	{
		exit;
	}
	table($mul+1,$num);
}
$num = 5;
table(1,$num);

?>