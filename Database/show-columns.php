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
        SHOW TABLES     : MySQL sunucusundaki database içerisinde bulunan tüm tabloların listesini bulmak için kullanılır.
        SHOW COLUMNS    : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm listesini bulmak için kullanılır.
        */

        try{
            $VeritabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;","root","");
            echo "Bağlantı Kuruldu.<br/>";
        }
        catch(PDOException $HataMesaji){
            echo "Bağlantı Hatası.<br/>";
            echo "Hata Açıklaması : ".$HataDegeri->getMessage();
        }

        // dbname=extraegitim olan database içerisinde bulunan tabloları gösterir.
        $SorguA  = $VeritabaniBaglantisi->query("SHOW TABLES");
        if($SorguA){
            foreach($SorguA as $Tablolar){
                echo "Tablo Adı : " . $Tablolar[0]."<br/>";

                $SorguB = $VeritabaniBaglantisi->query("SHOW COLUMNS FROM " .$Tablolar[0]); // hangi tablonun sütunlarını alacaksak onu yazacağız.
                
                foreach($SorguB as $Sutunlar){
                    echo "Sütun Adı : " .$Sutunlar[0]."<br/>";
                }
            }
        }
        else{
            echo "Sorgu Hatası.<br/>";
        }
    
        $VeritabaniBaglantisi   = null;
    ?>
</body>
</html>