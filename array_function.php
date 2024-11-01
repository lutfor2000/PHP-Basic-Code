<?php
$array_name_fruits = ["Mango","Banana","Orange","Grape","Cherry","Apple","Pineapple","Papaya"];
// sort($array_name_fruits);
// array_splice($array_name_fruits,1,4);

foreach($array_name_fruits as $value){
    echo $value, "<br>";
}

//======================Array Merge Start================================================>
$items = ["A","B","C","D"];
$new_items = ["E","F","G","H"];
$add_merge = array_merge($items,$new_items);

foreach($add_merge as $merge_key => $show_value){
   echo $merge_key." . ".$show_value, "<br>";
}
//======================Array Merge End================================================>

//======================Array Intersecet Start================================================>
$inter_class = ["A","B","C","D"];
$inter_new_items = ["E","F","G","H"];

$add_inter_items_add = array_intersect($inter_class,$inter_new_items);
print_r($add_inter_items_add);


//======================Array Intersecet End================================================>
