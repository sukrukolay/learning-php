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
        
            $Isim       = $_COOKIE["KullaniciAdi"];
            $Soyisim    = $_COOKIE["KullaniciSoyadi"];

            echo "Merhaba ".$Isim." ".$Soyisim." nasılsın ? <br/><br/>"; 
        
        ?>
        <a href="index.php">Form'a geri dön</a>
</body>
</html>
