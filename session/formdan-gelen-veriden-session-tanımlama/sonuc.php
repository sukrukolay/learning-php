<?php
    require_once("ayar.php");
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

        $GelenKullaniciAdi      =   $_POST["KullanicininAdi"];
        $GelenKullaniciSifresi  =   $_POST["KullanicininSifresi"];

        if( ($GelenKullaniciAdi !="") and ($GelenKullaniciSifresi!="") )
        {
            $_SESSION["Adi"]          = $GelenKullaniciAdi;
            $_SESSION["Sifresi"]      = $GelenKullaniciSifresi;
            
            echo "Merhaba ".$_SESSION["Adi"]." siteye giriş yaptınız <br/>";
            echo "<a href='cikis.php'>Çıkış Yap</a>";
        }
        else{
            echo "Lütfen formda herhangi bir boş alan bırakmayınız!";
            echo "<a href='index.php'>Forma Dön</a>";
        }

    ?>
</body>
</html>