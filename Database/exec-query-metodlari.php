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
            exec()  : MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu 
            işleminde etkilenen kayıt sayısnı bulmak için kullanılır.
            query() : MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu 
            işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.

            FETCH_ASSOC : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak
            tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
            FETCH_NUM   : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır.(0,1,2...)
            ve ilgili verilere sütun sıra numaraları ile erişilir. 
            FETCH_BOTH  : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde PHP
            tarafından otomatik olarak tanımlanır (0,1,2...) ve ilgili verilere ister sütun ister satur sıra numaraları ile erişilir.
            FETCH_OBJ   : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak
            tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
            */

            try {
                $VeritabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;","root","");
                echo "Veritabanına bağlantı kuruldu<br/>";
            } catch (PDOException $HataDegeri) {
                echo "Veritabanı Bağlantı Hatası<br/>";
                echo "Hata Açıklaması: ".$HataDegeri->getMessage();
                die();
            }

            $Sorgu  = $VeritabaniBaglantisi->query("SELECT *from uyeler", PDO::FETCH_ASSOC);

            echo "<pre>";
            print_r($Sorgu);
            echo "<pre>";
            $VeritabaniBaglantisi   = null;

            /*
            Ekran Çıktısı:
            Veritabanına bağlantı kuruldu
            PDOStatement Object
            (
                [queryString] => SELECT *from uyeler
            )

            */
        ?>
</body>
</html>