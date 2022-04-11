<?php

    $GelenDosyalar      = $_FILES["Dosyalar"];

    /*
    echo "<pre>";
    print_r($GelenDosyalar);
    echo "</pre>";
*/

    foreach($GelenDosyalar["tmp_name"] as $Anahtar =>$Eleman)
    {
        $AnahtarDegeri                  =   $Anahtar;
        $DosyaAdiDegeri                 =   $GelenDosyalar["name"][$AnahtarDegeri];
        $DosyaTuru                      =   $GelenDosyalar["type"][$AnahtarDegeri];
        $DosyaGeciciDiziniVeAdiDegeri   =   $GelenDosyalar["tmp_name"][$AnahtarDegeri];
        $DosyaHataDegeri                =   $GelenDosyalar["error"][$AnahtarDegeri];
        $DosyaBoyutuDegeri              =   $GelenDosyalar["size"][$AnahtarDegeri];

        $DosyaYuklemeDiziniVeAdi        =   "Dosyalar/".$DosyaAdiDegeri;

        if(move_uploaded_file($DosyaGeciciDiziniVeAdiDegeri, $DosyaYuklemeDiziniVeAdi))
        {
            echo "Anahtar Degeri : ". $AnahtarDegeri."<br>";
            echo "Dosya Adı : ". $DosyaAdiDegeri."<br>";
            echo "Dosya Türü : ". $DosyaTuru."<br>";
            echo "Dosya Gecici Adı :". $DosyaGeciciDiziniVeAdiDegeri."<br>";
            echo "Dosya Hata Değeri :". $DosyaHataDegeri."<br>";
            echo "Dosya Boyut Değeri :". $DosyaBoyutuDegeri."<br><br>";
            // echo "<img src='{$DosyaYuklemeDiziniVeAdi}'><br><br>"; //resim yüklendiyse resimleri ekrana basar.

        }
        else
        {
            echo "Dosya yükleme sırasında hata oluştu...! <br/>";
        }

    }

?>