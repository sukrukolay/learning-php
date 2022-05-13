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
    RENAME  : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun adını
    değiştirmek / güncellemek için kullanılır. Ayrıca istenirse herhangi bir tabloyu
    içerisinde bulunduğu database'den başka bir database'e taşımak için kullanılır.
    */

    try{
        $VeritabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8","root","");
        echo "Veritabanı Bağlantısı Kuruldu.<br/>";
    }
    catch(PDOException $HataMesaji){
        echo "Bağlantı Hatası.<br/>";
        echo "Hata Açıklaması".$HataMesaji->getMessage();
        die();
    }

    //dbname=deneme olan database içindeki ornek adlı tablonun ismini sukru olarak değiştirdi.
    $Sorgu  = $VeritabaniBaglantisi->query("RENAME TABLE ornek TO sukru");
    if($Sorgu){
        echo "Tablo Adı Değiştirildi.<br/>";
    }
    else{
        echo "Sorgu Hatası<br/>"; 
    }
    $VeritabaniBaglantisi   = null;
    ?>
</body>
</html>