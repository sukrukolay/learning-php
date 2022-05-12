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

// 2 veritabanına bağlanmak istenildiğinde try blokları içerisinde 2 bağlantı da yapılır. catch bloklarında ise normal hata işlemi yapılır.
        try {
            $VeritabaniBaglantisiBir    = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8", "root",""); 
            $VeritabaniBaglantisiIki    = new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8", "root",""); 
            echo "Veritabanına Bağlantıları Kuruldu. <br/>";
        } catch (PDOException $HataMesaji) {
            echo "Veritabanı Bağlantı Hatası <br/>";
            echo "Hata Açıklaması:".$HataMesaji->getMessage();
            die();
        }

        $VeritabaniBaglantisiBir    = null;
        $VeritabaniBaglantisiIki    = null;

    ?>
</body>
</html>