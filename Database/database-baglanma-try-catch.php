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
            PDO()           : Kendisine verilen parametreler doğrultusunda, MySQL sunucusuna yeni bir bağlantı açmak için kullanılır.
            PDOException    : MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hatayı yakalamak için kullanılır.
            getMessage      : MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata açıklama değerini bularak, bulduğu değeri geriye döndürür.
        
        */

        try{
            $VeritabaniBaglantisi       = new PDO("mysql::host = localhost; dbname=extraegitim; charset = UTF8", "root", "");
            echo "Veritabanı bağlantısı kuruldu.";
        }
        catch(PDOException $HataMesaji){
            echo "Veritabanı bağlantı hatası <br>";
            echo "Hata açıklaması : ". $HataMesaji->getMessage();
            die(); // hata olursa bundan sonra gelen kodları çalıştırma
        }
        
        echo "<br/>hahahaha"; // hata olursa die() metodundan dolayı burayı yazmayacaktır.
      
        // yapılacak iş bittikten sonra veritabanı null yapılarak bağlantısı kesilir.
        $VeritabaniBaglantisi       = null;
    ?>
</body>
</html>