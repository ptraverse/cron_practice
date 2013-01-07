<?php

$data = '';
while ($input = fread(STDIN, 1024)) 
{
	$time = date('H:i:s')."  :: ";
 	$data .= "*** ".$time.$input." *** \n";
}

echo $data;

$prev_pid = getmypid()-1;

$prev_proc = `ps -p $prev_pid`;

echo "that was all the output from $prev_proc \n"; 

?>
