<?php

// foreach döngülerde gezinmek için gerekli olan döngüdür.

$names = array("ali","burak","can","deniz","ege","fatih");

foreach($names as $iter) // foreach($hangi_dizi_üzerinde_işlem_yapılacak   as   $dolaşacak_değişken){}
{
    echo $iter;
    echo "<br>";
}
echo "<br> <br>";
foreach($names as $index => $name)  // $index=>$name demek index ve değeri ifade eder. $names[0]=ali gibi
{
    echo "$index ---> $name";
    echo "<br>";
}
/*
çıktı:
0--->ali
1--->burak
...
..
.
*/
  
?>