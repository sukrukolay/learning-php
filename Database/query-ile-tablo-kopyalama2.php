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
        try{
            $VeritabaniBaglantisi   = new PDO ("mysql:host=localhost;dbname=deneme;charset=UTF8", "root", "");
            echo "Veritabanı Bağlantısı Kuruldu.<br/>";
        }
        catch(PDOException $HataMesaji){
            echo "Veritabanı Bağlantı Hatası <br/>";
            echo "Hata Açıklaması : ".$HataMesaji->getMessage();
            
        }
        
        $SorguA  = $VeritabaniBaglantisi->query("CREATE TABLE ornekyedek LIKE ornek"); // ornek tablosunu sadaece yapısal olarak kopyalar.
        if ($SorguA) {
            echo "Tablo Oluşturuldu<br/>";

            // ornek tablosunda bulunan kayıtları ornekyedek adlı tabloya kopyalar.
            $SorguB  = $VeritabaniBaglantisi->query("INSERT INTO ornekyedek SELECT *FROM ornek"); 
            if($SorguB){
                echo "Kayıtlar Alındı<br/>";
            }
            else{
                echo "Sorgu Hatası<br/>";
            }
        }
        else {
            echo "Sorgu Hatası<br/>";
        }

        $VeritabaniBaglantisi   = null;
    ?>
</body>
</html>