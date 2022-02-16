<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    /* CODE EXAMPLE ONE
    //function functionName() {
    // code to be executed;} this is the function  syntax
    function Writemsg(){
        echo "Hello world!";
    }
    Writemsg(); //this calls the function */
    /*
//CODE EXAMPLE TWO
//PHP functions and aruguments
    function familyName($fname){
        echo "$fname Lemaron. <br>";
    }
    familyName("Samperu");
    familyName("Tonkei");
    familyName("Nosim"); 
    */
    function familyName($fname, $year){
        echo "$fname Lemaron. Born in $year. <br>";
    }
    familyName("Samperu", "1987");
    familyName("Tonkei", "1992");
    familyName("Samperu", "1995");


    ?>
</body>
</html>