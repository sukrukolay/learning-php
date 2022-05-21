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
    INSERT INTO     : MySQL sunucundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisini de / verilerini de eklemek için kullanılır.
    */


    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }

    // uyeler tablosuna belirtilen kayıtı ekler.
    $Ekle  = $VeriTabaniBaglantisi->query("INSERT INTO uyeler (adisoyadi, yas,sehir) values ('Jorge Jesus' , '67' , 'Lisbon'  )");
        if($Ekle){
            echo "Kayıt Eklendi<br/>";
        }
        else{
            echo "Sorgu Hatası<br/>";
        }

    $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>