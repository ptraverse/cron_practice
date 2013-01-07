<?php

$data = '';
while ($input = fread(STDIN, 1024)) 
{
	$time = date('H:i:s')."  :: ";
 	$data .= "*** ".$time.$input." *** \n";
}

echo $data;

?>
