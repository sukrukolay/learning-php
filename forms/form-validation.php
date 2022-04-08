<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="form-validation.php" method = "post">
    Adınız : <input type="text"  name = "isim" ><br/>
    E-posta : <input type="mail" name = "email"><br/>
    Yaş : <input type="number" name ="yas"><br/>
    Mesaj: <br/><textarea style="display:block" id="" cols="30" rows="10" name="mesaj"></textarea>
    <input type="checkbox" name="cinsiyet" value="erkek" > Erkek 
    <input type="checkbox" name="cinsiyet" value="kadin"> Kadın <br>
    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
        $gelenAd        = $_POST["isim"];
        $gelenMail      = $_POST["email"];
        $gelenYas       = $_POST["yas"];
        $gelenMesaj     = $_POST["mesaj"];
        $gelenCinsiyet  = $_POST["cinsiyet"];
        echo "Giriş Yapan Kullanıcı Adı: " .$gelenAd;
        echo "<br>";
        echo "Giriş Yapan Kullanıcı Maili: " .$gelenMail;
        echo "<br>";
        echo "Giriş Yapan Kullanıcı Yaşı: " .$gelenYas;
        echo "<br>";
        echo "Giriş Yapan Kullanıcı Mesajı: " .$gelenMesaj;
        echo "<br>";
        echo "Giriş Yapan Kullanıcı Cinsiyet: " .$gelenCinsiyet;
        echo "<br>";
}

?>
</body>
</html>