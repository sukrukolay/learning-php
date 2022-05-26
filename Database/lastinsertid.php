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
    lastInsertId()  : MySQL sunucusundaki databaseiçerisinde bulunan herhangi bir tabloya yeni bir kayıt eklendiğinde, eklenen son kaydın id değerini / verisini bulmak için kullanılır. 
    */

    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }

    $Ekle   = $VeriTabaniBaglantisi->query("INSERT INTO siparisler (uyeid,urunadi,urunfiyati) values (1,'Kitap',49) ");
    if($Ekle){
        echo "Kayıt Eklendi<br/>";
        echo "Eklenen Kayıtın ID Değeri : ".$VeriTabaniBaglantisi->lastInsertId()."<br/><br/>";
    }
    else{
        echo "Sorgu Hatası<br/><br/><br/>";
    }

    $Sorgu  = $VeriTabaniBaglantisi->query("SELECT *FROM siparisler" , PDO::FETCH_ASSOC);
    if($Sorgu){
        $KayitSayisi    = $Sorgu->rowCount();
        if($KayitSayisi>0){
            foreach($Sorgu as $Satirlar){
                echo " Ürün ID'si :".$Satirlar["id"]." | "." Üye ID :".$Satirlar["uyeid"]." | "."Ürün Adı : ".$Satirlar["urunadi"]." | "."Ürün Fiyatı : ".$Satirlar["urunfiyati"]."<br/>";
            }
        }
        else{
            echo "Kayıt Bulunamadı<br/>";
        }
        
    }
    else{
        echo "Sorgu Hatası<br/>";
    }

    $VeriTabaniBaglantisi   = null;


    /*
    Ekran Çıktısı:
    Kayıt Eklendi
    Eklenen Kayıtın ID Değeri : 8
    
    Ürün ID'si :1 | Üye ID :1 | Ürün Adı : Samsung S8+ | Ürün Fiyatı : 4500
    Ürün ID'si :2 | Üye ID :1 | Ürün Adı : Samsung Kılıf | Ürün Fiyatı : 104
    Ürün ID'si :3 | Üye ID :1 | Ürün Adı : Samsung Ekran Koruyucu | Ürün Fiyatı : 49
    Ürün ID'si :4 | Üye ID :2 | Ürün Adı : Philips TV | Ürün Fiyatı : 6800
    Ürün ID'si :5 | Üye ID :4 | Ürün Adı : Apple Ipod | Ürün Fiyatı : 3760
    Ürün ID'si :6 | Üye ID :5 | Ürün Adı : Asus Notebook | Ürün Fiyatı : 15500
    Ürün ID'si :7 | Üye ID :1 | Ürün Adı : Defter | Ürün Fiyatı : 20
    Ürün ID'si :8 | Üye ID :1 | Ürün Adı : Kitap | Ürün Fiyatı : 49
    */
    ?>
</body>
</html>