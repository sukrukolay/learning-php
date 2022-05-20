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
    

        try {
            $VeriTabaniBaglantisi    = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8" , "root","");
        } catch (PDOException $th) {
            echo "Bağlantı Sorunu<br/>";
            echo "Hata Açıklaması : " .$HataBilgisi->getMessage();
            die();
        }

        // kayıtları yaşa göre küçükten büyüğe doğru sıralar.
        //$Sorgu   = $VeriTabaniBaglantisi->query("select * from kayitlar order by yas asc", PDO::FETCH_ASSOC );
        
        // kayıtları yaşa göre büyükten küçüğe doğru sıralar. Eğer aynı yaştan kayıt gelirse adına göre sıralar(a dan z ye ).
        $Sorgu   = $VeriTabaniBaglantisi->query("select * from kayitlar order by yas desc, adisoyadi asc", PDO::FETCH_ASSOC );
        if($Sorgu){
            foreach($Sorgu as $Satirlar){
                echo "Kullanıcı Id: ". $Satirlar["id"]."<br>";
                echo "Kullanıcı Adı Soyadı: ".$Satirlar["adisoyadi"]."<br>";
                echo "Kullanıcı Yaş: ".$Satirlar["yas"]."<br>";
                echo "Kullanıcı Yaşadığı Şehir: ".$Satirlar["sehir"]."<br>";
                echo "Kullanıcı Siteye Giriş Sayısı: ".$Satirlar["siteyegirissayisi"]."<br>";
                echo "Kullanıcı Sipariş Sayısı: ".$Satirlar["siparissayisi"]."<br>";
                echo "Kullanıcı Sipariş Toplam Tutarı: ".$Satirlar["siparistoplamtutarlari"]."<br><br/>";

            }
        }
        else{
            echo "Sorgu Hatası <br/>";
        }
        $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>