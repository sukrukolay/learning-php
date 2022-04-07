<?php

// $GLOBALS
/*
    Atanacak olan değişkenin etki alanlarının değiştirilmesini sağlar.
Bu sayede global alanda tanımlanmış olan bir değişkene local alandan,
local alandan tanımlanmış bir değişkene global alandan ulaşabilme
imkanı tanır.
*/

// Local alandan global alana erişim
function deneme1()
{
    $GLOBALS["isim"] = "deneme1";  // kullanımı $GLOBALS["degisken-ismi"] = "değer";
}
deneme1();
echo  $isim; // fonk. içinde $GLOBALS["isim"] şeklinde belirtmeseydik undefined variable hatası alırız. Sebebi ise $isim değişkeninin fonksiyonda local tanımlanmış olmasıdır.

echo "<br>";
// Global alandan local alana erişim

$GLOBALS["isim"] = "deneme2";
function deneme2()
{
    echo $GLOBALS["isim"] ;
    // echo $isim; //bu kullanım hata verir.
}
deneme2();



?>