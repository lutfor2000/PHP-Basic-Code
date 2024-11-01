<?php
$string_value = "Bangladesh is Most Beautiful Country";
// $length = strlen($string_value);
// $word_count = str_word_count($string_value);
// $str_revert = strrev($string_value);
// $str_post = strpos($string_value,'Country');
// $replace = str_replace("UK","","Bangladesh" );
$import_array = [ "Bangladesh", "is", "Most", "Beautiful","Country"];
$import = implode('+', $import_array);
echo $import;


