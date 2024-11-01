<?php
$fahrenheit_no = 98.8;
$celsius_result = ($fahrenheit_no - 32) * 5 / 9 ;
echo number_format($celsius_result,2),"<br>";

// function FahrenheitToCelsius($fahrenheit){
// $celsius = ($fahrenheit - 32) * 9/5;
// echo $celsius;
// }
// FahrenheitToCelsius(40);

$celsius_number = 37;
$fahrenheit_result = ($celsius_number * 9 / 5) + 32 ;
echo number_format($fahrenheit_result,3);
// echo round( $fahrenheit_result,2);
