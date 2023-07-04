<?php

$letters = ["A" , "B" , "C"] ;

$numbers = [1 , 2 , 3] ;

function mergeArrays() {
    $result = array_merge($letters, $numbers);
    echo $result
} ;

mergeArrays()
?>