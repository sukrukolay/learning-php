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

        /**
         * construct parametre alırken destruct almaz.
         */
        class Deneme
        {
            
            public function __construct($HostBilgisi, $VeritabaniKullaniciAdi, $VeritabaniKullaniciSoyadi, $VeritabaniKullaniciSifresi, $GelenVeritabanıAdi)
            {
                $Metin  = "Gelen Host Bilgisi : ".$HostBilgisi ."<br/>". "Gelen Veritabanı Kullanıcı Adı Bilgisi : ".$VeritabaniKullaniciAdi ."<br/>". "Gelen Veritabanı Kullanıcı SoyAdı Bilgisi : "
                .$VeritabaniKullaniciSoyadi ."<br/>". "Gelen Veritabanı Kullanıcı Şifresi : ".$VeritabaniKullaniciSifresi."<br/>"."Gelen Veritabanı Adı : ".$GelenVeritabanıAdi;              
                echo $Metin;
            }
        }

        $bilgi = new Deneme("Localhost","Şükrü","Kolay","123","E-Ticaret");
    ?>
</body>
</html>