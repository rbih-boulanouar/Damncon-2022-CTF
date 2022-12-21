<?php
require 'function.php';

$dev = $_GET['number'];
if (isset($dev)) {
	if (is_numeric($dev)){
		if (!strpos($dev, ".")){
			if (strlen($dev) > 6){
				if ($dev < 99999 && $dev > 90000)
				echo 'Flag:  '.'Damncon{FAKE_FLAGS}';
				else
				print '<div class="alert">Oh Oh Think again</div>';
			} else
				print '<h1>Wrong Move Champ</h1>';
		} else
		print '<h1>Not That hard . keep trying</h1>';	
	} else
		print '</h1>Just read the source code once again</h1>';
}
?>
//---------------------------------------------------------------
// to solve this challenge we need first to send a get request to the server with paremeter called number 
// second this parameter must be a number and not a string
// third this number must be a integer and not a float
// fourth this number must be greater than 90000 and less than 99999
// fifth this number must be greater than 6 digits
// sixth this number must be between 90000 and 99999 
// so we can send a get request to the server with the following url
// http://localhost/challenge1-php.php?number=90001
// and we will get the flag