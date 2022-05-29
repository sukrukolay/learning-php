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
    beginTransaction() : MySQL suncucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda otomatik işleyen geçici işlem yapılarını açmak veya kapatmak için kullanılır.
    commit()          : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda daha önceden beginTransaction() metodu kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin geçicilikten çıkarak kalıcı hale döndürülmesi için kullanılır.
    rollBack()        : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda daha önceden beginTransaction() metodu kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin geçicilikten çıkartılarak işlemin geri alınması / iptal edilmesi için kullanılır.
    */
    
    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası.<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }
    
    
    $VeriTabaniBaglantisi->beginTransaction();

    $GuncelleBir   = $VeriTabaniBaglantisi->prepare("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi-1000 WHERE id=1");
    $GuncelleBir->execute();
    $GuncelleBirKayitSayisi = $GuncelleBir->rowCount();

    $GuncelleIki   = $VeriTabaniBaglantisi->prepare("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi+1000 WHERE id=2");
    $GuncelleIki->execute();
    $GuncelleIkiKayitSayisi = $GuncelleIki->rowCount();

    //if( ($GuncelleBirKayitSayisi > 0) and ($GuncelleIkiKayitSayisi > 0 ) ){
    if( ($GuncelleBirKayitSayisi > 0 ) && ($GuncelleIkiKayitSayisi > 0)  ){
            $VeriTabaniBaglantisi->commit();
            echo "İşlemler Gerçekleştirildi.<br/>";
    }else{
        $VeriTabaniBaglantisi->rollBack();
        echo "Sorgu Hatası.<br/>";
    }
    

    $Sorgu  = $VeriTabaniBaglantisi->prepare("SELECT *FROM hesaplar");
    $Sorgu->execute();
    if($Sorgu){
        $KayitSayisi    = $Sorgu->rowCount();
            if($KayitSayisi>0){
                foreach($Sorgu as $Satirlar){
                    echo $Satirlar["id"]." | ".$Satirlar["adisoyadi"]." | ".$Satirlar["hesapbakiyesi"]."<br/> ";
                }
            }else{
                echo "Kayıt Bulunamadı.<br/>";
            }
    }else{
        echo "Sorgu Hatası 2.<br/>";
    }
    $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>