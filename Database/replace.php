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
    REPLACE     : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırındaki / satırlarındaki sütuna ait veriyi tam veya kısmi olarak değiştirmek için kullanılır.
    */

    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }


    // uyeler adlı tablodaki Okan Güler adlı kayıtın yas sütunundaki 54 değerini 55 olarak değiştirir.
    $Sorgu  = $VeriTabaniBaglantisi->query("UPDATE uyeler SET yas=REPLACE(yas, '54','55') WHERE adisoyadi='Okan Güler' ");
        if($Sorgu){
            echo "Değerler Değiştirildi.<br/>";
        }
        else{
            echo "Sorgu Hatası.<br/>";
        }

    $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>