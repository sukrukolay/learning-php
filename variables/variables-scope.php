<?php

/* en üstte tanimlanan globalVariable degeri eğer fonk. içinde 
tanımlanmazsa en üstteki değerini almaz yani deneme() çağrılınca 
5 değeri yazmaz. fonksiyonu çağırınca yazmasini istediğimiz değer
fonk. içinde tekrar tanımlanmalıdır.
*/
$globalVariable = 5;
echo "<br/> fonk dışındaki deger:  " .$globalVariable;
function deneme(){
    /*
     echo "<br> gloabl değişkeni yazdır: " .$globalVariable;
     tanımlanamayan değişken hatası alınır.
    */
    $globalVariable = 4;
    echo "<br/>Fonk içindeki yeni tanımlanmış deger  : " .$globalVariable;
}

deneme();

echo "<br/>------------<br>";
$a = 1;
$b = 2;
echo $a; echo "<br>";
echo $b; echo "<br>";

function topla()
{
    global $a, $b; // globalde tanımlanan a ve b yi kullan. $a = 1 ve $b = 2 

    $sonuc = $a + $b; // $b = 1 + 2 --> $b değeri = 3 olur.
    echo "$a + $b = " .$sonuc;   // $a + $b = ."$sonuc"; işleminin sonucu --> 1+2 = 3 olur.
}

topla();
echo "<br/>------------<br>";

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


echo "<br>---------------<br>";

$sayi1 = 1;
$sayi2 = 2;

function toplam()
{
    $GLOBALS['sayi2'] = $GLOBALS['sayi1'] + $GLOBALS['sayi2']; //globalde bulunan sayi1 ve sayi2 kullan (dizi ile kullanım.)
}

toplam();
echo $sayi2;
echo "<br>---------------<br>";
// eğer static yazmazsak fonk. her çağrılışında a değeri 1 yazılır ve değer artışı bir işe yaramaz.
// static şeklinde yazıldığı için fonk. ilk çağrılışında  $a = 1 değerini alır sonra 1 artırır ve diğer çağrışlarda 1 artırılmış hali kullanılır.
function staticKullanim(){ 
    static $a = 1;  
    echo $a;
    $a++;
}
staticKullanim();echo "<br>"; // 1
staticKullanim(); echo "<br>"; // 2
staticKullanim();echo "<br>"; // 3

?>