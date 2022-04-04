<?php

$players = array("Messi","Ronaldo", "Kane","kante");
echo "players dizisi eleman sayısı: ".count($players);
echo "<br>";
echo "players dizisi elemanları :  <br>"; 
for($a = 0 ; $a< count($players) ; $a++) //döngü boyutunu dizinin uzunluğu kadar yaptım ki bütün elemanları yazdırsın.
{
    echo "$a-".$players[$a]; //$a- ile $a'nın o an ki değerini yazdırıyor ve .$players[$a] ile de $a o an kaçsa dizinin o elemanını yazdırıyor
    echo "<br>";
}


?>