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


    $GelenIsim      = $_POST["isimsoyisim"]; 
    $GelenYas       = $_POST["yas"];
    $GelenSehir     =  $_POST["sehir"];
    
    
    



    // uyeler tablosuna belirtilen kayıtı ekler.
    $Ekle  = $VeriTabaniBaglantisi->query("INSERT INTO uyeler (adisoyadi, yas,sehir) values ('$GelenIsim' , '$GelenYas' , '$GelenSehir' )");
        if($Ekle){
            header("Location:index.php");
            exit();
        }
        else{
            echo "Sorgu Hatası<br/>";
        }

    $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>