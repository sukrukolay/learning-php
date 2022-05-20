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
        WHERE   : MySQL suncusundaki database içerisinde bulunan herhangi bir tablonun işlem sırasında tüm verilerini işlemek yerine sadece koşula bağlı verilerin işlemek istenildiğini belirtmek için kullanılır. 
        */

        try {
            $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
        } catch (PDOException $th) {
            echo "Hata Açıklaması : ".$th->getMessage();
            die();
        }

                // adisoyadi sütununda (adı ve soyadı içerisinde) herhangi bir yerinde 'en' geçMEYEN kayıtları getirir. 
                // $Sorgu  = $VeriTabaniBaglantisi->query("SELECT *FROM kayitlar WHERE adisoyadi NOT LIKE '%en%' " , PDO::FETCH_ASSOC);


        // adisoyadi sütununda (adı ve soyadı içerisinde) herhangi bir yerinde 'en' geçen kayıtları getirir. 
        $Sorgu  = $VeriTabaniBaglantisi->query("SELECT *FROM kayitlar WHERE adisoyadi LIKE '%en%' " , PDO::FETCH_ASSOC);
        if($Sorgu){
            foreach($Sorgu as $Satirlar){
                echo $Satirlar["id"]." | ". $Satirlar["adisoyadi"] . " | " . $Satirlar["yas"] . " | " .  $Satirlar["sehir"] ."<br/><br/>";
            }
        }
        else{
            echo "Sorgu Hatası<br/>";
        }
        $VeriTabaniBaglantisi    = null;

        /* Ekran Çıktısı
        
        1 | Volkan Alakent | 38 | İstanbul

        3 | Hakan Alakent | 40 | Ankara
            
        6 | Cengiz Kurtuluş | 38 | İzmir
            
        8 | Levent Çelik | 37 | İzmir
            
        */
    ?>
</body>
</html>