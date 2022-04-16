<?php
    require_once("ayar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sonuc.php" method="post">
        Kullanıcı Adı: <br/>
        <input type="text" name="KullanicininAdi"><br/>
        Kullanıcı Şifresi: <br/>
        <input type="password" name="KullanicininSifresi"><br/>
        <input type="submit" value="Giriş Yap">
    </form>
</body>
</html>