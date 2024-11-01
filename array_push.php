<?php
$array_name_fruits = ["Mango","Banana","Orange","Grape","Cherry","Apple","Pineapple","Papaya"];
array_push($array_name_fruits,"Lemon");
$length = count($array_name_fruits);

for($i = 0; $i < $length; $i++){
    echo $i.". ".$array_name_fruits[$i],"<br>";
}


// print_r($length);
