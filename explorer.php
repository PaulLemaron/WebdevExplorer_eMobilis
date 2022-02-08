<?php
$height_required_men=1.60;
$height_required_women=1.50;
if($height_required<=1.40){
    echo "You are way below the height needed";
}elseif($height_required>=1.41 && $height_required<=1.59){
    echo "slightly less than the required height";
}else{
    echo "Height qualified, proceed to  the medical assesment";
}
?>
<!-- how do we write a nested if staement in case of different height for men and women -->