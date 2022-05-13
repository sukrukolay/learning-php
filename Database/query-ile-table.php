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
        CREATE DATABASE : MySQL sunucusuna yeni bir database ekleme / oluşturma için kullanılır.
        CREATE TABLE    : MySQL sunucusundaki database içerisine yeni bir tablo ekleme / oluşturma için kullanılır. Ayrıca istenirse herhangi bir
    tablo içeriklerini başka bir tabloya kopyalamak için de kullanılabilir.
        */

        try{
            $VeritabaniBaglantisi   = new PDO ("mysql:host=localhost;dbname=deneme;charset=UTF8", "root", "");
            echo "Veritabanı Bağlantısı Kuruldu.<br/>";
        }
        catch(PDOException $HataMesaji){
            echo "Veritabanı Bağlantı Hatası <br/>";
            echo "Hata Açıklaması : ".$HataMesaji->getMessage();
            
        }
        
        $Sorgu  = $VeritabaniBaglantisi->query("CREATE TABLE ornek(
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            adi varchar(100) NOT NULL,
            soyadi varchar(100) NOT NULL,
            emailadresi varchar(255) NOT NULL UNIQUE KEY,
            durumu tinyint(1) UNSIGNED NOT NULL,
            kayittarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            yoneticiaciklamasi TEXT NOT NULL

            -- id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            -- firstname VARCHAR(30) NOT NULL,
            -- lastname VARCHAR(30) NOT NULL,
            -- email VARCHAR(50),
            -- reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )
        ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci "); 
        if ($Sorgu) {
            echo "Tablo Oluşturuldu<br/>";
        }
        else {
            echo "Sorgu Hatası<br/>";
        }

        $VeritabaniBaglantisi   = null;
    ?>
</body>
</html>