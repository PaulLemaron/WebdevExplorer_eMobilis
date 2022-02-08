<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
<?php
$heightrange="1.71m";
switch($heightrange){
    case "1.4m":
        echo "Sorry try out when you are a little taller";
        break;
    case "1.5m":
        echo "Are you a lady, we consider your height, otherwise a man, grow taller";
        break;
    case "1.6":
        echo "You are way above this, you are qualified";
        break;
    default:
        echo "You are good to go";
}
    ?>
</body>
</html>