<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // cookielerin dizi şeklinde tanımlanması ve yazdırılması aşağıdaki gibidir.
        /*
         setcookie("Kullanici[Adi]","Şükrü");
         setcookie("Kullanici[Soyadi]","Kolay");
         setcookie("Kullanici[Email]","deneme@gmail.com");
         setcookie("Kullanici[Telefon]","1234"  
         echo "<pre>";
         print_r($_COOKIE);
         echo "<pre/>";
         */

         // cookie lerdeki dizi tanımlamasının sessionlardaki karşılığı. Yani sessionlarda dizi tanımlaması.
         $_SESSION["Kullanici"] = array("Adi" => "Şükrü", "Soyadi" =>"Kolay", "Email" =>"deneme@gmail.com", "Telefon" =>"1234");
         $_SESSION["Sepet"]     = ["ID"=>"12","Tutari"=>"1250","ParaBirimi"=>"TL","OdemeTuru"=>"Banka Havalesi"];
         
         echo "<pre>";
         print_r($_SESSION);    // bütün sessionları yazdırır.
         echo "<pre/>";

         echo "<br/><br/>";
         print_r($_SESSION["Kullanici"]); // Kullanici dizisini tek başına yazdırmak için
         
         echo "<br/><br/>";
         print_r($_SESSION["Sepet"]);  // Sepet dizisini tek başına yazdırmak için
         echo "<br/><br/>";

         // sessionları dizi şeklinde değil ama ayrı ayrı yazdırmak
         echo "Kullanici ismindeki sessionların değerleri: <br/>";
         echo "Adı: ".$_SESSION["Kullanici"]["Adi"]."<br/>";
         echo "Soyadı: ".$_SESSION["Kullanici"]["Soyadi"]."<br/>";
         echo "Email: ".$_SESSION["Kullanici"]["Email"]."<br/>";
         echo "Telefon: ".$_SESSION["Kullanici"]["Telefon"]."<br/><br/>";

         echo "Sepet ismindeki session değerleri: <br/>";
         echo "ID: ".$_SESSION["Sepet"]["ID"]."<br/>";
         echo "Tutari: ".$_SESSION["Sepet"]["Tutari"]."<br/>";
         echo "ParaBirimi: ".$_SESSION["Sepet"]["ParaBirimi"]."<br/>";
         echo "OdemeTuru: ".$_SESSION["Sepet"]["OdemeTuru"]."<br/><br/>";
    ?>
</body>
</html>