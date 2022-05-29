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
    prepare()           : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre query hazırlamak için kullanılır.
    bindParam()         : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i derlemek için kullanılır.
    bindValue()         : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i derlemek için kullanılır.
        PDO::PARAM_BOOL : Boolean
        PDO::PARAM_NULL : Null
        PDO::PARAM_INT  : Integer
        PDO::PARAM_STR  : String
    execute()           : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i çalıştırmak için kullanılır.
    fetch()             : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tekil veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış ve sonuçları alınmış olan query'nin verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şekli de belirtilebilir.
    fetchAll()          : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun çoğul veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış ve sonuçları alınmış olan query'nin verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şekli de belirtilebilir.
        FETCH_ASSOC     : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarı olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
        FETCH_NUM       : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır ve ilgili verilere sütun sıra numaraları ile erişilir.
        FETCH_BOTH      : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hem de PHP tarafından otomatik olarak tanımlanır ve ilgili verilere sütun isimleri ile ister sütun sıra numaraları ile erişilir.
        FETCH_OBJ       : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.   
    */

    try{
        $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
    }catch(PDOException $Hata){
        echo "Bağlantı Hatası.<br/>";
        echo "Hata Açıklaması : ".$Hata->getMessage();
        die();
    }

    /* // alltaki 2 satırla aynı işi görür.
    $Ekle  = $VeriTabaniBaglantisi->prepare("INSERT INTO uyeler (adisoyadi, yas , sehir) values (?, ?, ?)");
    $Ekle->execute(['Volkan Alakent',38,'İstanbul']);
    */

    $Ekle  = $VeriTabaniBaglantisi->prepare("INSERT INTO uyeler (adisoyadi, yas , sehir) values ('Volkan Alakent',38,'İstanbul')");
    $Ekle->execute();
        if($Ekle){
            echo "Ekleme işlemi başarılı.<br/>";
        }else{
            echo "Sorgu Hatası.<br/>";
        }
    $VeriTabaniBaglantisi   = null;

    ?>
</body>
</html>