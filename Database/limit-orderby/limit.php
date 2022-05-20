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
            LIMIT       : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece belirtilen adet veya aralıklar kadar işlemek istenildiğini belirtmek için kullanılır.    
            ORDER BY    : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerine işlem esnasında hangi sıra veya sıralar dahilinde erişilmek istenildiğini belirtmek için kullanılır.    
        */

        try{
            $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
        }catch(PDOException $HataBilgisi){
            echo "Bağlantı Sorunu<br/>";
            echo "Hata Açıklaması : " .$HataBilgisi->getMessage();
            die();
        }

        // FETCH_ASSOC = gelen verileri sütun isimleriyle bir diziye aktarıyordu.
        // $Sorgu  = $VeriTabaniBaglantisi->query("SELECT * FROM siparisler LIMIT 4" , PDO::FETCH_ASSOC);//LIMIT 4 dersek siparisler tablosundaki ilk 4 kayıtı getirir.
        
        // siparisler tablosundaki 1.indisli yani 2.satırdaki kayıttan başlar ve 3 tane daha kayıt getirir.
        $Sorgu  = $VeriTabaniBaglantisi->query("SELECT * FROM siparisler LIMIT 1,3" , PDO::FETCH_ASSOC);
        if($Sorgu){
            foreach ($Sorgu as $Satirlar) {
                echo $Satirlar["id"]." | ". $Satirlar["uyeid"] . " | " . $Satirlar["urunadi"] . " | " .  $Satirlar["urunfiyati"] ."<br/><br/>";
            }
        }
        else{
            echo "Sorgu Hatası<br/>";
        }

        $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>