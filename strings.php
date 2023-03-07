<?php
$str="ddThis is is";
echo $str."<br>";
$length=strlen($str);

echo"the length of string is ".$length." thankyou<br>";
echo"thenumber of word in this string is ".str_word_count($str)."<br>";
echo"the reverse  string is ".strrev($str)."<br>";
echo"the position of is in this string is: ".strpos($str,"is")."<br>";
echo"the replace string is: ".str_replace("is","at",$str)."<br>";


?>