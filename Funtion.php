<?php
function Shanto(){
    $message_one = "Welcome To Php";
    echo $message_one, "<br>";
}
Shanto();

function sum(){
    $num1 = 50;
    $num2 = 60;
    $sum = $num1 + $num2;
    echo "Summation :", $sum, "<br>";
}
sum();

function Area_Of_Circle(){
    $PI = 3.1416;
    $r = 45;
    $area = $PI * $r * $r;
    echo "Area Of Circle : ", $area,"<br>";
}
Area_Of_Circle();

function Area_Of_Rectangle(){
    $land = 50;
    $height = 60;
    $RectangleArea = 0.5 * $land * $height;
    echo "Rectangle Area Is : ", $RectangleArea, "<br>";
}
Area_Of_Rectangle();

function Area_of_Trapezoid(){
    $a = 20;
    $b = 50;
    $h = 60;
    $TrapezoidArea = 0.5 * ($a + $b) * $h ;
    echo "Trapezoid Area Is ", $TrapezoidArea, "<br>";
} 

Area_of_Trapezoid();

function condition(){
    for($i = 1; $i < 10 ; $i++){
        echo "Number : ", pow(2,$i), "<br>";
    }
} 
condition();


function additon($number ,$number02){
      $subTotal = $number + $number02;
      echo "total Number Is :", $subTotal;
}
additon(100,600);

