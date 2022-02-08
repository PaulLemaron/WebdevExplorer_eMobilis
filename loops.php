<?php
/* while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long 
as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array */

 // UNCOMMENT EACH OF THE CODES BELOW TO RUN  INDIVIDUALLLY
/*
$x=1;
do{ 
    echo "The number is: $x <br>";
    $x++;
}while($x<=5);
echo "********************************************************************************************";
echo "<br>";
$i=0;
for ($i=0; $i <=100; $i+=10) { 
    echo "The number is: $i <br>";
 } 

//foreach  loop used for arrays
$colors= array("red","blue","green","yellow");
foreach($colors as $value){
    echo "$value <br>";
}
*/
$player_nationality= array("Sadio Mane"=>"Senegal","Mo Salah"=>"Egypt","Michael Olunga"=>"Kenya");
foreach($player_nationality as $x=> $country){
    echo "$x =$country <br>";
}