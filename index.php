<?php
    $mode = "dark";
    $name = "TomTom";
    $greeting = "Hello";
    // data types
    $num = 42; #int
    $dub = 42.0; #double
    $boo = true; # true or false
    $arr = array('a','b','c'); #array
    define('DAYS_IN_YEAR', 365);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quick Intro</title>
    </head>
    <body>  
    <h1>
        <?php echo $greeting .", ". $name . "!" ?>
    </h1>
        <?php echo $arr[1]; ?>
        <?php echo DAYS_IN_YEAR ?>
    </body>
</html>