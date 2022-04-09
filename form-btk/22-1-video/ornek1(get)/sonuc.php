<?php

    /*index.php de bulunan formda method olarak get seçtiğimiz için verileri alırken de $_GET superglobalini kullandık  */

    $GelenAdSoyad = $_GET["AdSoyad"];     /*$_POST yerine $_REQUEST ile de alabiliriz */
    $GelenEmailAdresi = $_GET["EmailAdresi"];
    $GelenTelefon = $_GET["Telefon"];
    $GelenCinsiyet = $_GET["Cinsiyet"];
    $GelenYas = $_GET["Yas"];


    echo "Adınız Soyadınız: " .$GelenAdSoyad. "<br/>";
    echo "E-Mail adresiniz: " .$GelenEmailAdresi."<br/>";
    echo "Telefonunuz: "  .$GelenTelefon. "<br/>";
    echo "Cinsiyetiniz: " .$GelenCinsiyet. "<br/>";
    echo "Yasınız: " .$GelenYas."<br/>" ;
?>