<?php

    /*index.php de bulunan formda method olarak post seçtiğimiz için verileri alırken de $_POST superglobaini kullandık   */

    $GelenAdSoyad = $_POST["AdSoyad"];     /*$_POST yerine $_REQUEST ile de alabiliriz */
    $GelenEmailAdresi = $_POST["EmailAdresi"];
    $GelenTelefon = $_POST["Telefon"];
    $GelenCinsiyet = $_POST["Cinsiyet"];
    $GelenYas = $_POST["Yas"];


    echo "Adınız Soyadınız: " .$GelenAdSoyad. "<br/>";
    echo "E-Mail adresiniz: " .$GelenEmailAdresi."<br/>";
    echo "Telefonunuz: "  .$GelenTelefon. "<br/>";
    echo "Cinsiyetiniz: " .$GelenCinsiyet. "<br/>";
    echo "Yasınız: " .$GelenYas."<br/>" ;
?>