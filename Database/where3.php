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

        // id değerinde 2,4 ve 6 değerlerini içeren kayıtları getir.
        $Sorgu  = $VeriTabaniBaglantisi->query("SELECT *FROM kayitlar WHERE id IN (2,4,6)" , PDO::FETCH_ASSOC);
        if($Sorgu){
            foreach($Sorgu as $Satirlar){
                echo $Satirlar["id"]." | ". $Satirlar["adisoyadi"] . " | " . $Satirlar["yas"] . " | " .  $Satirlar["sehir"] ."<br/><br/>";
            }
        }
        else{
            echo "Sorgu Hatası<br/>";
        }
        $VeriTabaniBaglantisi    = null;

        /*
        Ekran Çıktısı

        2 | Onur Tatlı | 35 | İstanbul

        4 | Ümit Okudan | 40 | İzmir
            
        6 | Cengiz Kurtuluş | 38 | İzmir
            
        */
    ?>
</body>
</html>