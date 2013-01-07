<?php

$i = 0;
while ($i < 2)
{
	echo "The curren ttime is ".date('H:i:s')." ok ok..\n";
	sleep(1);
	$i++;
	echo `php ./proc2.php`;
}

/*
$prev_pid = `echo $$`;
echo "previous pid was $prev_pid \n";

$prev_proc = `ps -p $prev_pid`;
echo "which was $prev_proc \n";
*/

/*
$curr_pid = getmypid();
echo "curent pid is $curr_pid \n";

$curr_proc = `ps -p $curr_pid`;
echo "which is $curr_proc \n";
*/


?>
