<?php
session_start();
require_once("baglan.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{
    background-color: lightblue;
}

.InputAlani{
    padding: 4px 5px;
}
.InputAlani:focus{
    box-shadow: 0px 0px 5px 1px purple;
}
.buton{
    background-color: tomato;
    border:2px solid tomato;
    border-radius: 5px ;
    color: lightblue;
    transition: 1.4s;
    font-size: 1.2rem;
}
.buton:hover{
    transition: 1s;
    background-color: lightblue;
    color: tomato;
}

a{
    text-decoration : none;
    color: red;
}
</style> 
</head>
<body>
<?php session_destroy(); ?>
<?php if(isset($_SESSION["Kullanici"])) { ?>

        <?php echo "Merhaba " .$UyeninAdiSoyadi. " Hoş Geldiniz." ?><br/>
        <a href="cikis.php">Çıkış Yap</a>

<?php } else{  ?>
    <form action="uyegiris.php" method="post" >
            <h3>ÜYELİK ALANI</h3>
            <h5>Kullanıcı Adı : </h5>
            <input type="text" name = "kullaniciadi" class="InputAlani">
            <h5>Şifre : </h5>
            <input type="password" name = "sifre"class="InputAlani">
            <!-- <h5>Email Adresiniz : </h5>
            <input type="email" name = "emailadresi"class="InputAlani"><br/><br/> -->
            <br/><br/><input type="submit" value = "Giriş Yap" class="buton"><br/><br/>
            <a href="uyeol.php">Üye Ol</a>

    </form>
    <?php } ?>
</body>
</html>
<?php
$VeriTabaniBaglantisi   = null;
?>
