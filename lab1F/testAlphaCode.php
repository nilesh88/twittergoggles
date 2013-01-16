<!-------------------------------------------------------------------------------
   Function Name: testAlpha
   Purpose: Test whether a string consists of all alpha characters.
   Parameters: $str
   Return Type: True or False
-------------------------------------------------------------------------------->


<?php

	function testAlpha ($str)
		{
			foreach ($str)
			{
				if (preg_match(/^['A-Za-z_]*/$', $str))
					return True;
				else if ("", $str)
					return False;
				else 
					return False;
		}}
			
?>
