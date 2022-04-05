<?php

// parametre almayan fonk.
function parametresizFonk()
{
    echo "Ben parametresiz fonksiyonum";
}
parametresizFonk();

// alt satıra inen fonksiyon 
function altSatir()
{
    echo "<br>";
}
altSatir();

//parametre alan fonk
function carp($sayi1,$sayi2,$sayi3)
{
    $carpim = $sayi1*$sayi2*$sayi3;
    echo "$carpim";
}
carp(3,4,5);
altSatir();

//geriye değer döndüren fonk.
function tek_mi_cift_mi($sayi)
{
    if($sayi%2==0)
        return "Sayi cifttir";
    else
        return "Sayi tektir";
}
echo tek_mi_cift_mi(7);
altSatir();

// girilen sayının faktöriyelini hesaplayan fonk
function faktoriyel($sayi)
{
    $sonuc=1;
    while($sayi >0)
    {
        
        $sonuc = $sonuc * $sayi;
        $sayi--;
        if($sayi==0)
            return $sonuc; 
    }
}
echo faktoriyel(5);

altSatir();

// fonk içine değer girilmezse misafir girişi ama girilirse o girilen değerin girişi yapıldı yazdıran fonk
function login($kullanici = "misafir")
{
    return $kullanici. " girisi yapildi.";
}
echo login("admin");
?>