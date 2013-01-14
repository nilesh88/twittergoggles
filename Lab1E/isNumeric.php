<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (is_numeric($test = "123.2")) {
            echo $test . " true";
        } else {
            echo $test . " false";
        }

        echo "<br>";

        if (is_numeric($test = "122+55")) {
            echo $test . " true";
        } else {
            echo $test . " false";
        }

        echo "<br>";

        if (is_numeric($test = "++-3")) {
            echo $test . " true";
        } else {
            echo $test . " false";
        }

        echo "<br>";
        
        if (is_numeric($test = "12435473")) {
            echo $test . " true";
        } else {
            echo $test . " false";
        }

        echo "<br>";
        
        if (is_numeric($test = "+0")) {
            echo $test . " true";
        } else {
            echo $test . " false";
        }

        echo "<br>";
        
        if (is_numeric($test = ".")) {
            echo $test . " true";
        } else {
            echo $test . " false";
        }

        echo "<br>";
        
        if (is_numeric($test = "-")) {
            echo $test . " true";
        } else {
            echo $test . " false";
        }

        echo "<br>";
        
        if (is_numeric($test = "1.2.3")) {
            echo $test . " true";
        } else {
            echo $test . " false";
        }

        echo "<br>";
        ?>
    </body>
</html>
