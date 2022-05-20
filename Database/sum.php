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
    /*
    MIN   = MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en küçük değerini bulmak için kullanılır.
    */

    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }

    $Sorgu  = $VeriTabaniBaglantisi->query("SELECT SUM(siteyegirissayisi) as ToplamGirisSayisi FROM kayitlar");
    if($Sorgu){
        $KayitSayisi    = $Sorgu->rowCount();
        if($KayitSayisi>0){
            $Kayit    = $Sorgu->fetch();
            echo "Siteye Toplam Giriş Sayısı : ".$Kayit["ToplamGirisSayisi"];
        }
        else{
            echo "Kayıt Yok<br/>";
        }
    }
    else{
        echo "Sorgu Hatası<br/>";
    }
    $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>