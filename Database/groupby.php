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

    $SorguA  = $VeriTabaniBaglantisi->query("SELECT *FROM kayitlar GROUP BY sehir ORDER BY sehir DESC " , PDO::FETCH_ASSOC);

        if($SorguA){
            $KayitSayisiA    = $SorguA->rowCount();
                if($KayitSayisiA>0){
                    foreach($SorguA as $SatirlarA){
                        echo $SatirlarA["sehir"]."<br/>";

                    
                        $SorguB     = $VeriTabaniBaglantisi->query("SELECT *FROM kayitlar WHERE sehir='".$SatirlarA["sehir"] ."'" , PDO::FETCH_ASSOC);
                            if($SorguB){
                                $KayitSayisiB    = $SorguB->rowCount();
                                    if($KayitSayisiB>0){
                                        foreach($SorguB as $SatirlarB){
                                            echo $SatirlarB["adisoyadi"]." | " .$SatirlarB["yas"]." | " .$SatirlarB["siteyegirissayisi"]."<br/> ";
                                            
                                        }
                                    }
                            }
                            else{
                                echo "Sorgu Hatası<br/>";
                            }

                            echo "<br/>";
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
    Trabzon
    Yusuf Türk | 37 | 5

    Kocaeli
    Serkan Çelik | 35 | 97

    İzmir
    Ümit Okudan | 40 | 12
    Cengiz Kurtuluş | 38 | 69
    Levent Çelik | 37 | 44
    Osman Şahin | 52 | 32

    İstanbul
    Volkan Alakent | 38 | 147
    Onur Tatlı | 35 | 64
    Aslı Tatlı | 33 | 14

    Ankara
    Hakan Alakent | 40 | 83
    */
    ?>
</body>
</html>