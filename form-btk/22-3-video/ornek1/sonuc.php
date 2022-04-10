<?php

    $GelenDosya         = $_FILES["Dosya"]; // dosyaları $_FILES superglobali ile alırız.
    
    $DosyaninAdi        = $_FILES["Dosya"]["name"]; //$DosyaninAdi = $GelenDosya["name"]; soldaki ile aynı işlevi yerine getirir.
    $DosyaninTuru       = $_FILES["Dosya"]["type"];
    $DosyaninTempAdi    = $_FILES["Dosya"]["tmp_name"];
    $DosyaninHataDurumu = $_FILES["Dosya"]["error"];
    $DosyaninBoyutu     = $_FILES["Dosya"]["size"];

    $Yol                = "resimler/";
    $DosyaYoluVeAdi     = $Yol.$DosyaninAdi;
    
    if(move_uploaded_file($DosyaninTempAdi, $DosyaYoluVeAdi))
    {
        echo "Dosyanız Başarıyla Yüklendi... <br/>";
        echo "Dosyanın Adı : " .$DosyaninAdi."<br/>";
        echo "Dosyanın Türü : " .$DosyaninTuru."<br/>";
        echo "Dosyanın Geçici Dizini ve Adı : " .$DosyaninTempAdi."<br/>";
        echo "Dosyanın Hata Durumu : " .$DosyaninHataDurumu."<br/>";
        echo "Dosyanın Boyutu : " .$DosyaninBoyutu."<br/>";
        echo "<img src='{$DosyaYoluVeAdi}'>";
    }
    else
    {
        echo "Dosya yükleme sırasında bilinmeyen bir hata oluştu... <br/>";
    }
    

?>