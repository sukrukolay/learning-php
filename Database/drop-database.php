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
    DROP DATABASE   : MySQL sunucusu içerisinde bulunan herhangi bir database'i silmek için kullanılır.
    DROP TABLE      : MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloyu silmek için kullanılır.
    */

    try{
        $VeritabaniBaglantisi   = new PDO("mysql:host=localhost;charset=UTF8","root","");
        echo "Veritabanı Bağlantısı Kuruldu.<br/>"; 
    }
    catch(PDOException $HataMesaji){
        echo "Bağlantı Hatası.<br/>";
        echo "Hata Açıklaması : ". $HataMesaji->getMessage();
        die();
    }

    // test isminde olan database'i siler.
    $Sorgu  = $VeritabaniBaglantisi->query("DROP DATABASE test");
    if($Sorgu){
        echo "Database Başarıyla Silindi.<br/>";
    }
    else{
        echo "Sorgu Hatası.<br/>";
    }

    $VeritabaniBaglantisi   = null;
    ?>
</body>
</html>