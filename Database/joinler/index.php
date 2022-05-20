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
    INNER JOIN      : MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerinin birbiri ile ilişkilendirilmesi için kullanılır.
    LEFT JOIN       : MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun soldaki tabloya göre birbiri ile ilişkilendirilmesi için kullanılır.
    RIGHT JOIN      : MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun sağdaki tabloya göre birbiri ile ilişkilendirilmesi için kullanılır.
    NATURAL JOIN    : MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerinin birbiri ile otomatik olarak ilişkilendirilmesi için kullanılır.
    USING           : MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında ortak sütun koşulunu tanımlamak / belirtmek için kullanılır.
    ON              :  MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında sütun koşulunu tanımlamak / belirtmek için kullanılır.
    */
    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }

    // 3 tablonun INNER JOIN ile kulanılmış hali
    $Sorgu  = $VeriTabaniBaglantisi->query("SELECT *FROM uyeler INNER JOIN siparisler ON uyeler.id = siparisler.uyeid INNER JOIN istatistikler ON uyeler.id= istatistikler.uyeid",PDO::FETCH_ASSOC);
    if($Sorgu){
        $KayitSayisi    = $Sorgu->rowCount();
        if($KayitSayisi>0){
            foreach($Sorgu as $Satirlar){
                echo $Satirlar["id"]." | ".$Satirlar["adisoyadi"]." | ".$Satirlar["yas"]." | ".$Satirlar["sehir"] ." | ".$Satirlar["urunadi"]." | ".$Satirlar["urunfiyati"] ." | " .$Satirlar["siteyegirissayisi"] ." | " .$Satirlar["siparissayisi"] 
                
                ."<br/>";
            }
        }
        else{
            echo "Kayıt Yok<br/>";
        }
    }
    else{
        echo "Sorgu Hatası<br/>";
    }
    $VeriTabaniBaglantisi   = null;


    /*
    Ekran Çıktısı:
    1 | Şükrü Kolay | 21 | Konya | Samsung S8+ | 4500 | 147 | 3
    1 | Şükrü Kolay | 21 | Konya | Samsung Kılıf | 104 | 147 | 3
    1 | Şükrü Kolay | 21 | Konya | Samsung Ekran Koruyucu | 49 | 147 | 3
    2 | Nuri Kolay | 17 | Konya | Philips TV | 6800 | 64 | 1
    4 | İsmail Kolay | 50 | Konya | Apple Ipod | 3760 | 12 | 1
    5 | Okan Güler | 54 | İstanbul | Asus Notebook | 15500 | 97 | 0
    */
    ?>
</body>
</html>