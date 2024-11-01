<?php
$array_name_fruits = [
"Mango" => "আম",
"Banana"  => "কলা",
"Orange"  => "কমলা",
"Grape"  => "আঙ্গুর",
"Cherry"  => "চেরি",
"Apple"  => "আপেল",
"Pineapple"  => "আনারস",
"Papaya"  => "পেঁপে"
];

// foreach($array_name_fruits as $results){
//     echo $results, "<br>";
// }

foreach($array_name_fruits as $key => $value){
     echo "This is Key : ",$key." "."This is Value : ",$value,"<br>";
}