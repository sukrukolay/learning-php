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

    $Sorgu  = $VeriTabaniBaglantisi->query("SELECT MIN(yas) as EnKucukYas , MAX(yas) as EnBuyukYas , AVG(yas) as YasOrtalamasi, MIN(siteyegirissayisi) as EnAzSiteGirisi , MAX(siteyegirissayisi) as EnCokSiteGirisi , AVG(siteyegirissayisi) as SiteGirisOrtalamasi, SUM(siparistoplamtutarlari) as ToplamCiro FROM kayitlar");
    if($Sorgu){
        $KayitSayisi    = $Sorgu->rowCount();
        if($KayitSayisi>0){
            $Kayit    = $Sorgu->fetch();
            echo "Sitedeki En Küçük Yaş Değeri : ".$Kayit["EnKucukYas"]."<br/>";
            echo "Sitedeki En Büyük Yaş Değeri : ".$Kayit["EnBuyukYas"]."<br/>";
            echo "Sitedeki Yaş Ortalaması Değeri : ".$Kayit["YasOrtalamasi"]."<br/>";
            echo "Siteye En Az Giriş Sayısı Değeri : ".$Kayit["EnAzSiteGirisi"]."<br/>";
            echo "Siteye En Fazla Giriş Sayısı Değeri : ".$Kayit["EnCokSiteGirisi"]."<br/>";
            echo "Siteye Ortalama Giriş Sayısı Değeri : ".$Kayit["SiteGirisOrtalamasi"]."<br/>";
            echo "Sitenin Toplam Ciro Değeri : ".$Kayit["ToplamCiro"]."<br/>";
        }
        else{
            echo "Kayıt Yok<br/>";
        }
    }
    else{
        echo "Sorgu Hatası<br/>";
    }
    $VeriTabaniBaglantisi   = null;

    /*
    Ekran Çıktısı:
    Sitedeki En Küçük Yaş Değeri : 33
    Sitedeki En Büyük Yaş Değeri : 52
    Sitedeki Yaş Ortalaması Değeri : 38.5000
    Siteye En Az Giriş Sayısı Değeri : 5
    Siteye En Fazla Giriş Sayısı Değeri : 147
    Siteye Ortalama Giriş Sayısı Değeri : 56.7000
    Sitenin Toplam Ciro Değeri : 94126
    */
    ?>
</body>
</html>