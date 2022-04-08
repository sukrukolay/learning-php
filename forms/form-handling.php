<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form-handling.php" method ="post">  <!--action kısmı gideceği yeri ifade eder-->
        Isim : <input type="text" name="isim"><br/>
        Soyisim : <input type="text" name="soyIsim"><br/>
        Yas: <input type="number" name="yas"><br/>
        E-mail : <input type="mail" name="email"><br/>
        Şifre : <input type="password" name="sifre"><br/>
        <input type="submit">
    </form>
    
    
    <?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $gelenAd    = $_POST["isim"];
        $gelenSoyad = $_POST["soyIsim"];
        $gelenMail  = $_POST["email"];
        $gelenYas   = $_POST["yas"];
        $gelenSifre = $_POST["sifre"];
        echo "Giriş Yapan Kullanıcı Adı: " .$gelenAd;
        echo "<br>";
        echo "Giriş Yapan Kullanıcı Soyadı: " .$gelenSoyad;
        echo "<br>";
        echo "Giriş Yapan Kullanıcı Yaşı: " .$gelenYas;
        echo "<br>";
        echo "Giriş Yapan Kullanıcı Mail Adresi: " .$gelenMail;
        echo "<br>";
        echo "Giriş Yapan Kullanıcı Şifresi: " .$gelenSifre;
        echo "<br>";
    }
    
    ?>
</body>
</html>