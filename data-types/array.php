<?php
/*
var_dump(...) içerisine yazılan değişkenin içeriği ve türünü gösterir.
$deneme = 12345;
var_dump($deneme); //ekrana int(12345) yazar.

*/

$fruitsArray = array("banana","apple","melon","watermelon");
echo "I like " .$fruitsArray[0]. ", " .$fruitsArray[1].", ".$fruitsArray[2]. " and " .$fruitsArray[3]. " .";
echo "<br>";
$countOffruitsArray = count($fruitsArray); // count dizideki eleman sayısını belirtir
echo "fruitsArray eleman sayisi = ".$countOffruitsArray; 
?>