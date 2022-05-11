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

        $VeritabaniHostAdresi       = "localhost";
        $VeritabaniKullaniciAdi     = "root";
        $VeritabaniSifresi          = "";
        $VeritabaniAdi              = "extraegitim";    
    
        // veritabanı bağlantısı aşağıdaki gibi sağlanır. Alttaki iki bağlantı da birbirinin aynısıdır, birisinde değişkenle bağlantı sağlanmıştır.
        //$VeritabaniBaglantisi       = new PDO("mysql::$VeritabaniHostAdresi; dbname=$VeritabaniAdi; charset = UTF8", $VeritabaniKullaniciAdi, $VeritabaniSifresi);
        $VeritabaniBaglantisi       = new PDO("mysql::host = localhost; dbname=extraegitim; charset = UTF8", "root", "");
        echo "<pre>";
            print_r($VeritabaniBaglantisi);         // PDO Object()   bağlantı başarılı.
        echo "</pre>";
      
        // yapılacak iş bittikten sonra veritabanı null yapılarak bağlantısı kesilir.
        $VeritabaniBaglantisi       = null;
    ?>
</body>
</html>