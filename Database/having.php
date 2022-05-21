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
    DISTINCT    : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin sadece ilkini işleme dahil eder. Diğerlerinin işlem dışında bırakılmasını sağlamak için kullanılır.

    GROUP BY    : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin gruplandırılmasını sağlamak için kullanılır.

    HAVING  :  MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin GROUP BY ifadesi ile gruplandırılması sırasında koşul / koşullar tanımlamak / belirtmek için kullanılır.
    */

    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }

    $SorguA  = $VeriTabaniBaglantisi->query("SELECT sehir , SUM(siparistoplamtutarlari) as ToplamTutar  FROM kayitlar GROUP BY sehir HAVING ToplamTutar  >0" , PDO::FETCH_ASSOC);

        if($SorguA){
            $KayitSayisiA    = $SorguA->rowCount();
                if($KayitSayisiA>0){
                    foreach($SorguA as $SatirlarA){
                        echo $SatirlarA["sehir"]. "  ".$SatirlarA["ToplamTutar"]   ."<br/>";
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

    /*
    Ekran Çıktısı:
    İstanbul 72673
    İzmir 4603
    Trabzon 16850
    */
    ?>
</body>
</html>