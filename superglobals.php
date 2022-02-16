<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superglobals</title>
</head>
<body>
    <?php
   /* //$GLOBALS is a PHP super global variable which is used to access 
    //global variables from anywhere in the PHP script (also from within functions or methods).
    $x=75;
    $y=25;

    function addition(){
        $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
    }
    addition();
    echo $z; */  //UNCOMMENT THIS CODE TO RUN

    //$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
    /*echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME']*/

   // PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text">
    Name: <input type="text" name="fname" >
    </form>

    ?>
</body>
</html>