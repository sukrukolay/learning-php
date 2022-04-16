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

        $GelenAdi       = $_POST["Adi"];
        $GelenSoyadi    = $_POST["Soyadi"];
        $YasamSuresi    = time() + ((60*60)*24);

        setcookie("KullaniciAdi",$GelenAdi,$YasamSuresi);
        setcookie("KullaniciSoyadi",$GelenSoyadi,$YasamSuresi);
    ?>
    <a href="kim.php">Buraya Tıkla</a>
</body>
</html>
