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
    DELETE      : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun bir kaydını içeren satırı / satırları silmek için kullanılır.
    */

    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }

    // kayitlar tablosundaki id değeri 11'e eşit olan kayıtı siler.
    $Sil    = $VeriTabaniBaglantisi->query("DELETE FROM kayitlar WHERE id=11");
        if($Sil){
            echo "Kayıtlar Silindi.<br/>";
        }
        else{
            echo "Sorgu Hatası.<br/>";
        }
    $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>