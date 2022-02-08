<?php
$grade=67;
if($grade<=39){
    echo "this is a fail";
}elseif($grade>=40 && $grade<=60){
    echo "This is credit";
}elseif($grade>=61 && $grade<=80){
    echo "Keep it up";
}else{
    echo "this is a distinction";
}
?>
