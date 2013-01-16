<?php
/*lab1 INFO 154 Jan 16, 2013
 * 
 * John Carrol-testNum
 * Jarrod Neser-testCases
 * Danica Dometita-testAlpha
 */        
        
        

                
        /*test case for testAlpha
        */
          
        $abc = "abc";
        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $null = "";
        $nums = "123";
        $abc123 = "abc123";
        $ab12cd = "ab12cd";
        $numabc = "123abc";
        
        
        /*echos testAlpha script to verify our function 
         *is looking working as we designed it to based
         *on the requirements
         */
        echo "Here is the test cases for testing the testAlpha function";
        echo "<br>";
        echo "abc is ".testAlpha($abc);
        echo "abcdefghijklmnopqrstuvwxyz is ".testAlpha($alphabet);
        echo " is ".testAlpha($null);
        echo "123 is ".testAlpha($nums);
        echo "abc123 is ".testAlpha($abc123);
        echo "ab12cd is ".testAlpha($ab12cd);
        echo "123abc is ".testAlpha($numabc);
 /*-----------------------------------------------------------------------------
  */      

          
          
        /*test case for testnumber
        */ 
        $num = "0";
        $digit = "0.1";
        $positive = "+4";
        $neg = "-9";
        $number = "123";
        $minusnum= "3-5";
        $numberabc = "123abc";
        $abcnumber = "abc123";
        $abnumcd = "ab12cd";
        $numnull = "";
        $alpha = "abc";
        $comma = "1,500";
        
        
        
        
        /*echos testNUM script to verify our function 
         *is looking working as we designed it to based
         *on the requirements
         */
        
        echo "Here is the test cases for testing the testNUM function";
        echo "<br>";
        echo "0 is ".testNUM($num);
        echo "0.1 is ".testNUM($digit);
        echo "+4 is ".testNUM($positive);
        echo "-9 is ".testNUM($neg);
        echo "123 is ".testNUM($number);
        echo "3-5 is ".testNUM($minusnum);
        echo "123abc is ".testNUM($numberabc);
        echo "abc123 is ".testNUM($abcnumber);
        echo "ab12cd is ".testNUM($abnumcd);
        echo " is ".testNUM($numnull);
        echo "abc is ".testNUM($alpha);
        echo "1,500 is ".testNUm($comma);
        
        ?>
