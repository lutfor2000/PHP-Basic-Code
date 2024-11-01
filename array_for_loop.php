<?php
$array_name_fruits = ["Mango","Banana","Orange","Grape","Cherry","Apple","Pineapple","Papaya"];
$length = count($array_name_fruits);
for($i = 0; $i<$length; $i++){
    echo $i." . ". $array_name_fruits[$i] ,"<br>";
    echo PHP_EOL;
}
