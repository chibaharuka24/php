<?php
function getTriangleArea($base,$height) {
    return $base * $height/ 2;
}

function getSquareArea($base,$height) {
    return $base * $height;
}

function getTrapezoidArea($upperBase,$lowerBase,$height) {
    return ($upperBase + $lowerBase) * $height / 2;
}


echo getTriangleArea(3,6)."\n";
echo getSquareArea(4,7)."\n";
echo getTrapezoidArea(3,5,4);