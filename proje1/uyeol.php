<?php
    require_once("baglan.php");
    if(isset($_SESSION["Kullanici"])){
        header("Location:index.php");
        exit();
    }
    else{

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
<div class="kayitalanidiv" style ="background-color: red;">   
    <form action="uyeolsonuc.php" method="post">
        <h3>YENİ ÜYE KAYIT ALANI</h3>
           Kullanıcı Adı : <input  type="text" name = "kullaniciadi" class="InputAlani" ><br/><br/>       
           Şifre : <input type="password" name = "sifre"class="InputAlani"  ><br/><br/> 
           Adı Soyadı : <input type="text" name = "adsoyad" class="InputAlani"  ><br/><br/>  
           Email Adresi : <input type="email" name = "emailadresi" class="InputAlani"  ><br/><br/>     
        <br/><br/><input type="submit" value = "KAYIT OL" class="buton"><br/><br/> 
        <a href="index.php">Ana Sayfaya Dön</a>
    </form>
</div>
</body>
</html>
<?php
    
}
$VeriTabaniBaglantisi = null;
?>