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
    CHECK       : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun kontrol edilmesi için kullanılır.
    ANALYZE     : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun çözümlenmesi / analiz edilmesi için kullanılır.
    REPAIR      : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun onarılması için kullanılır.
    OPTIMIZE    : MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun optimize edilmesi için kullanılır.
    */

    try{
        $VeritabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
        echo "Bağlantı Kuruldu.<br/>";
    }catch(PDOException $HataMesaji){
        echo "Bağlantı Hatası<br/>";
        echo "Hata Açıklaması : $HataMesaji->getMessage()";
        die();
    }

    $SorguA =  $VeritabaniBaglantisi->query("CHECK TABLE uyeler");
    $SorguB =  $VeritabaniBaglantisi->query("ANALYZE TABLE uyeler");
    $SorguC =  $VeritabaniBaglantisi->query("REPAIR TABLE uyeler");
    $SorguD =  $VeritabaniBaglantisi->query("OPTIMIZE TABLE uyeler");

    if(($SorguA == true) and ($SorguB == true) and ($SorguC == true) and ($SorguD == true) ){
        echo "Tablo Bakımı Yapıldı.<br/>";
    }
    else{
        echo "Sorgu Hatası.<br/>";
    }
    $VeritabaniBaglantisi   = null;
    ?>
</body>
</html>