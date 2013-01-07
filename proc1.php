<?php

$i = 0;
while ($i < 2)
{
	echo "The curren ttime is ".date('H:i:s')." ok ok..\n";
	sleep(1);
	$i++;
	echo `php ./proc2.php`;
}


?>
