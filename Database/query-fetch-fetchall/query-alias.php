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
        //kayitlar tablosunda bulunan değerleri $Sorgu değişkenine atadık. foreach ile ekrana bastırdık.
        $Sorgu  = $VeritabaniBaglantisi->query("SELECT adisoyadi AS KISIADI ,sehir AS KISISEHIR FROM kayitlar");
        if($Sorgu){
            foreach ($Sorgu as $Satirlar) {
                echo "ADI SOYADI        : ".$Satirlar["KISIADI"]."<br/>";
                echo "YAŞADIĞI ŞEHİR    : ".$Satirlar["KISISEHIR"]."<br/><br/>";
            }
        }
        else{
            echo "Sorgu Hatası.<br/>";
        }
        $VeritabaniBaglantisi   = null;
    ?>
</body>
</html>