<?php

// değişkenler $ ile oluşturulur.
// alt satira yazdirmak icin <br/> kullanilir.
$txt="deneme-string <br/>";
echo $txt; 

$int = 5;
echo "Bu bir int sayidir:" .$int; 
echo " <br/>Alt satir" .$txt; //üstteki satırın altına inip $txt değerini yazdırır.


$number1 = 1;
$number2 = 3;
$result = $number1+ $number2; // result = 1+3
echo "$number1 + $number2 =".$result; // 1+3 = 4
echo "<br>";

$ad = "Şükrü";
$soyad = "Kolay";
$dogumYili = "20.09.2000";

echo "Adım Soyadım: ".$ad." ".$soyad; echo "<br>";
echo "Doğum Tarihim: "  ."$dogumYili";

/*
$ad + $soyad yazılırsa hata verir.
. operatörü birleştirmek için kullanılır.
*/



?> 