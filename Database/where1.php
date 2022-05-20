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

        // yaşı 40 a eşit olmayan kayıtları getirir.
        $Sorgu  = $VeriTabaniBaglantisi->query("SELECT *FROM kayitlar WHERE YAS != 40" , PDO::FETCH_ASSOC);
        if($Sorgu){
            foreach($Sorgu as $Satirlar){
                echo $Satirlar["id"]." | ". $Satirlar["adisoyadi"] . " | " . $Satirlar["yas"] . " | " .  $Satirlar["sehir"] ."<br/><br/>";
            }
        }
        else{
            echo "Sorgu Hatası<br/>";
        }
        $VeriTabaniBaglantisi    = null;
    ?>
</body>
</html>