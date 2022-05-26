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
    $Guncelle   = $VeriTabaniBaglantisi->query("UPDATE uyeler SET yas=61 WHERE adisoyadi='İsmail Kartal'");
    if($Guncelle){
        echo "Kayıt Güncellendi<br/>";
    }
    else{
        echo "Sorgu Hatası<br/>";
    }


    $VeriTabaniBaglantisi   = null;
    
    ?>
</body>
</html>