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

    $GelenID    = $_GET["KayitIDsi"];

    $Sorgu   = $VeriTabaniBaglantisi->query("SELECT *FROM uyeler WHERE id='". $GelenID ."'");
    if($Sorgu){
        $KayitSayisi    = $Sorgu->rowCount();
        if($KayitSayisi>0){
            $SorguKaydi = $Sorgu->fetch(PDO::FETCH_ASSOC);
            $KaydinIsimDegeri = $SorguKaydi["adisoyadi"];
            $KaydinYasDegeri = $SorguKaydi["yas"];
            $KaydinSehirDegeri = $SorguKaydi["sehir"];

        }else{
            echo "Kayıt Bulunamadı.<br/>";
        }
    }
    else{
        echo "Sorgu Hatası<br/>";
    }

    ?>

    <form action="sonuc.php" method=post>
    <input type="hidden" name="KayitIDsi" value="<?php echo $GelenID;?>">
    İsim : <input type="text" name="isim" value="<?php echo $KaydinIsimDegeri; ?>"><br/>
    Yaş : <input type="text" name="yas" value="<?php echo $KaydinYasDegeri; ?>"><br/>
    Şehir : <input type="text" name="sehir" value="<?php echo $KaydinSehirDegeri; ?>"><br/>
    <input type="submit" value="Güncelle">
    </form>


    <?php
    $VeriTabaniBaglantisi   = null;
    
    ?>
</body>
</html>