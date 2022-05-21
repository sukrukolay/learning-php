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

    
    ?>

    <form action="sonuc.php" method="post">
        İsim Soyisim: <input type="text" name="isimsoyisim"><br/>
        Yaş : <input type="number" name="yas"><br/>
        Şehir : <input type="text" name="sehir"><br/>
        <input type = "submit" value = "Kaydet"><br/>
    </form>
    <br/><br/><br/>

    <?php

    $Sorgu  = $VeriTabaniBaglantisi->query("SELECT *FROM uyeler",PDO::FETCH_ASSOC);
        if($Sorgu){
            $KayitSayisi    = $Sorgu->rowCount();
                if($KayitSayisi>0){
                    foreach($Sorgu as $Satirlar){
                        echo $Satirlar["id"]. " | ".$Satirlar["adisoyadi"]. " | ".$Satirlar["yas"]. " | ".$Satirlar["sehir"]. "<br/>";
                    }
                }
                else{
                    echo "Kayıt Yok";
                }
        }
        else{
            echo "Sorgu Hatası<br/>";
        }



    $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>