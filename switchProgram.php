<?php
$mark = 35;
switch (true) {
    case ($mark <= 100 && $mark >=80):
        echo "A+";
        break;
    case($mark < 80 && $mark >= 70):
        echo "A-";
        break;
    case($mark < 70 && $mark >= 60):
        echo "A";
        break;
    case($mark < 60 && $mark >= 50):
        echo "B";
        break;
    case($mark < 50 &&  $mark >= 40):
        echo "C";
        break;
    case($mark < 40 &&  $mark >=33):
        echo "D";
        break;
    default:
        echo "F";
        break;
} 
