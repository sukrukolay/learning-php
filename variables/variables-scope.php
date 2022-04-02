<?php

/* en üstte tanimlanan globalVariable degeri eğer fonk. içinde 
tanımlanmazsa en üstteki değerini almaz yani deneme() çağrılınca 
5 değeri yazmaz. fonksiyonu çağırınca yazmasini istediğimiz değer
fonk. içinde tekrar tanımlanmalıdır.
*/
$globalVariable = 5;
echo "<br/> fonk dışındaki deger:  " .$globalVariable;
function deneme(){
    $globalVariable = 4;
    echo "<br/>Fonk içindeki  deger  : " .$globalVariable;
}

deneme();




echo "<br/>";
$a = 1;
$b = 2;

function topla()
{
    global $a, $b;

    $b = $a + $b;
}

topla();
echo $b;

echo "<br/>";
function b(){
    echo "<br/>";
}

$ad = "sukru";
echo $ad;
b();
function isim(){
    global $ad; // globalde kullanılan $ad değişkenini belirtir.
    echo $ad;
}
isim();

?>