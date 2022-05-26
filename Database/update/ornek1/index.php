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
    UPDATE  : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırındaki sütuna / sütunlara ait veriyi / verileri güncellemek için kullanılır.
    */
    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }

    // adisoyadi sütunundaki değer İsmail Kartal olan kayıtın yas değerini 61 olarak güncelle.
    $Sorgu   = $VeriTabaniBaglantisi->query("SELECT *FROM uyeler" , PDO::FETCH_ASSOC);
    if($Sorgu){
        $KayitSayisi    = $Sorgu->rowCount();
        if($KayitSayisi>0){
            foreach($Sorgu as $Kayitlar){
                echo $Kayitlar["id"] . " | " .$Kayitlar["adisoyadi"] . " | " .$Kayitlar["yas"] . " | " .$Kayitlar["sehir"]. " <a href ='guncelle.php?KayitIDsi=" . $Kayitlar["id"] . "'> GÜNCELLE<a/>" . "<br/><br/>";
                
            }
        }else{
            echo "Kayıt Bulunamadı.<br/>";
        }
    }
    else{
        echo "Sorgu Hatası<br/>";
    }


    $VeriTabaniBaglantisi   = null;
    
    ?>
</body>
</html>