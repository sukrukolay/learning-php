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
    
    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }

    $GelenKayıtIdsi     = $_POST["KayitIDsi"];
    $GelenAdSoyad       = $_POST["isim"];
    $GelenYas           = $_POST["yas"];
    $GelenSehir         = $_POST["sehir"];

    $Guncelle   = $VeriTabaniBaglantisi->query("UPDATE uyeler SET adisoyadi='".$GelenAdSoyad."' , yas='".$GelenYas."' , sehir='".$GelenSehir."'        WHERE id=".$GelenKayıtIdsi);

    if($Guncelle){
        header("Location:index.php");
        exit();
    }
    else{
        echo "Sorgu hatası";
    }
    $VeriTabaniBaglantisi   = null;
    
    ?>
</body>
</html>