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
    rowCount()  : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun toplam kayıt sayısını bulmak veya işlem yapıldığında etkilenen kayıt sayısını bulmak için kullanılır.
    */

    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");

    }catch(PDOException $HataDegeri){
        echo "Hata Açıklaması : " .$HataDegeri->getMessage();
        die();
    }
    $Sorgu  = $VeriTabaniBaglantisi->query("SELECT *FROM kayitlar ", PDO::FETCH_OBJ);
    if($Sorgu){
        // $KayitSayisi değişkeni içerisine rowCount() metodu sayesinde tabloda kaç kayıt varsa onu atarız.
        $KayitSayisi    = $Sorgu->rowCount();
        echo "kayitlar tablosunda ". $KayitSayisi. " adet kayıt vardır.<br/>";
        if($KayitSayisi>0)
        {
            foreach($Sorgu as $Satirlar){
                echo $Satirlar->id . " | ". $Satirlar->id . " | ". $Satirlar->adisoyadi . " | ".$Satirlar->yas . " | ".$Satirlar->sehir ."<br/>";   
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
    
    
    ?>
</body>
</html>