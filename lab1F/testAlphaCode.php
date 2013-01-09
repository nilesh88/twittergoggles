<?php
	#Lab 1F
	#Members: John Carroll, Danica Dometita, Ben Toll, Jarrod Neeser
	
	function testAlpha ($str)
		{
			if (preg_match(/^['A-Za-z]+$/', $str))
				return True;
			else 
				return False;
		}
			
?>
