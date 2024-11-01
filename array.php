<?php
$array_name = array("Shanto","Lutfor","messi","M Sala");

echo $array_name[1];
print_r($array_name);

$array_name_two = ["Mango","Banana","Apple","Orange","wide Apple"];

print_r($array_name_two);
echo count($array_name_two) ,"<br>";
echo $array_name_two[4-1];
echo $array_name_two[0];
echo array_pop($array_name_two);
array_push($array_name_two,"Lutfor","Shanto");
echo print_r($array_name_two);