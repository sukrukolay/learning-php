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
    ALTER TABLE             : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun eklenceğini, herhangi bir sütunun silineceğini veya herhangi bir sütunun adının ya da yapısının değiştirileceğini belirtmek için kullanılır. 

    ADD / ADD COLUMN        : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun eklemek için kullanılır.
        FIRST   : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklencek olan yeni sütunun, diğer tüm sütunların en başına eklenmesi gerektiğini belirtmek için kullanılır.
        AFTER   : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklencek olan yeni sütunun, belirtilecek olan sütundan bir sonra eklenmesi gerektiğini belirtmek için kullanılır.
    CHANGE / CHANGE COLUMN  : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun adını ya da yapısını değiştirmek için kullanılır. 

    MODIFY / MODIFY COLUMN  : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun yapısını değiştirmek için kullanılır.
    
    DROP / DROP COLUMN      : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunu silmek için kullanılır.
    */

    try{
        $VeritabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
        echo "Bağlantı Sağlandı<br/>";
    }
    catch(PDOException $HataMesaji){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : ". $HataMesaji->getMessage();
        die();
    }

    // dbname=extraegitim olan veritabanında bulunan son isimli sütunu siler.
    $Sorgu  = $VeritabaniBaglantisi->query("ALTER TABLE uyeler DROP son");
    if($Sorgu){
        echo "Sütun Yapısı Güncellendi.<br/>";
    }
    else{
        echo "Sorgu Hatası<br/>";
    }
    $VeritabaniBaglantisi   = null;
    ?>
</body>
</html>