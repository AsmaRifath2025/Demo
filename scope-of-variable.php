<?php
$x=10;
$y=5;

function show(){
    global $x;
    global $y;
    echo $x;
    echo $y;
}
show();
?>