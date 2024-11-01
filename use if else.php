<?php
$mark = 40;

if($mark<=100 && $mark >= 80){
    echo "A+";
}
elseif ($mark < 80 && $mark >= 70) {
    echo "A";
}
elseif ($mark < 70 && $mark >= 60) {
    echo "A-";
}
elseif ($mark < 60 && $mark >= 50) {
    echo "B";
}
elseif ($mark < 50 && $mark >= 40) {
    echo "C";
}
elseif ($mark < 40 && $mark >= 33) {
    echo "D";
}
elseif($mark < 33){
    echo "F"; 
}



