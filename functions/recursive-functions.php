<?php

// recursive faktöriyel hesaplama

function faktoriyelRecursive($sayi)
{
    if($sayi==0)
    {
        return 1;
    }
    else
    {
       return $sayi*=faktoriyelRecursive($sayi-1);
    }
}

echo faktoriyelRecursive(5);

echo "<br>";

// girilen sayıya kadar recursive toplama

function topla($sayi)
{
    if($sayi == 0)
        return 0;
    else
    {
        return $sayi += topla($sayi-1);
    }
}
echo topla(10);
echo "<br>";

// iç içe fonksiyon kullanımı
function anafonksiyon()
{

    function altfonksiyoon()
    {
        echo "I am sub func ";
    }
 
    echo "I am main func.";
 
 }
 anafonksiyon(); // ana fonksiyon çağrılınca sadece ana fonk. gelir. Alt fonk gelmez.
 echo "<br>";
 altfonksiyoon(); // ana fonksiyonu çağırmadan alt fonk. çağırılınca hata veriyor.

 echo "<br>";

 
// deneme dizi recursive

$array = array
(
    array
    (
        array
        (
            'yeees'
        )
    )
        );

function dizim($a)
{
    foreach($a as $k)
    {
        if(is_array($k))
            return dizim($k);
        else 
            return $k;
    }
}

echo dizim($array);

?>