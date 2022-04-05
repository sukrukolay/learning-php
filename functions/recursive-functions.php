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
echo "<br>";


// fonksiyonu başka fonk. a gönderme
function altaGonder($operator,$sayi)
{

    if($operator == "topla")
    {
        $gonder = 1;
    }
    if($operator == "cikar")
    {
        $gonder = 2;
    }
    if($operator == "carp")
    {
        $gonder = 3;
    }
    if($operator == "bol")
    {
        $gonder = 4;
    }

    return hallet($gonder,$sayi); //kodlar yukarıdan aşağıya işlenir. return statement ı görünce orada kesilir.
} 

function hallet($gelen,$sayi)
{
    if($gelen == 1)
    {
        return $sayi+10;
    }
    if($gelen == 2)
    {
        return $sayi-10;
    }
    if($gelen == 3)
    {
        return $sayi*10;
    }
    if($gelen == 4)
    {
        return $sayi/10;
    }
}

echo altaGonder("bol",78);
?>