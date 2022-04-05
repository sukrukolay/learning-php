<?php

// foreach döngülerde gezinmek için gerekli olan döngüdür.

$names = array("ali","burak","can","deniz","ege","fatih");

foreach($names as $iter) // foreach($hangi_dizi_üzerinde_işlem_yapılacak   as   $dolaşacak_değişken){}
{
    echo $iter;
    echo "<br>";
}
echo "<br> <br>";
foreach($names as $index => $name) 
{
    echo "$index ---> $name";
    echo "<br>";
}
?>