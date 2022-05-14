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
        query()     : MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        fetch()     : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tekil veri okuma işlemi için query metodu kullanılarak hazırlanmış olan query'nin (sorgunun) verilerini okumak için kullanılır. Ayrıca istenirse de verilere erişim şekli de belirtilebilir. 
        fetchAll()  : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun çoğul veri okuma işlemi için query metodu kullanılarak hazırlanmış olan query'nin (sorgunun) verilerini okumak için kullanılır. Ayrıca istenirse de verilere erişim şekli de belirtilebilir.  
        
            FETCH_ASSOC     : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
            FETCH_NUM       : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide, dizinin anahtarları PHP tarafından otomatik olarak tanımlanır(0,1,2,3...) ve ilgili verilere sütun sıra numaraları ile erişilir.
            FETCH_BOTH      : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide, dizinin anahtarları hem ilgili tablonun sütun isimleriyle hem de PHP tarafından otomatik olarak tanımlanır(0,1,2,3...) ve ilgili verilere ister sütun isimleri ile ister sütun sıra numaraları ile erişilir.
            FETCH_OBJ       : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.  
        */

        try{
            $VeritabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");

        }catch(PDOException $HataDegeri){
            echo "Bağlantı Hatası.<br/>";
            echo "Hata Açıklaması : ".$HataDegeri->getMessage();
            die();
        }
        //kayitlar tablosunda bulunan değerleri $Sorgu değişkenine atadık. 
        // PDO::FETCH_BOOT default değerdir yazmamıza gerek yoktur.
        $Sorgu  = $VeritabaniBaglantisi->query("SELECT * FROM kayitlar" , PDO::FETCH_BOTH); 
        if($Sorgu){
            foreach ($Sorgu as $Satirlar) {
                echo "ID                        : ".$Satirlar["id"]."<br/>";
                echo "ADI SOYADI                : ".$Satirlar["adisoyadi"]."<br/>";
                echo "YAŞ                       : ".$Satirlar["yas"]."<br/>";
                echo "YAŞADIĞI ŞEHİR            : ".$Satirlar["sehir"]."<br/>";
                echo "SİTEYE GİRİŞ SAYISI       : ".$Satirlar["siteyegirissayisi"]."<br/>";
                echo "SİPARİŞ SAYISI            : ".$Satirlar["siparissayisi"]."<br/>";
                echo "SİPARİŞ TOPLAM TUTARI     : ".$Satirlar["siparistoplamtutarlari"]."<br/><br/>";
            }
        }
        else{
            echo "Sorgu Hatası.<br/>";
        }
        $VeritabaniBaglantisi   = null;

        /*
        Ekran Çıktısı:
        ID : 1
        ADI SOYADI : Volkan Alakent
        YAŞ : 38
        YAŞADIĞI ŞEHİR : İstanbul
        SİTEYE GİRİŞ SAYISI : 147
        SİPARİŞ SAYISI : 3
        SİPARİŞ TOPLAM TUTARI : 4653

        ID : 2
        ADI SOYADI : Onur Tatlı
        YAŞ : 35
        YAŞADIĞI ŞEHİR : İstanbul
        SİTEYE GİRİŞ SAYISI : 64
        SİPARİŞ SAYISI : 1
        SİPARİŞ TOPLAM TUTARI : 68000
        ...
        .. 
        .

        */
    ?>
</body>
</html>