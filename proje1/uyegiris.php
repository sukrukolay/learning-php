<?php
session_start();
require_once("baglan.php");

if(isset($_POST["kullaniciadi"])){
    $GelenKullaniciAdi  = Filtre($_POST["kullaniciadi"]);
}
else{
    $GelenKullaniciAdi  = "";
}

if(isset($_POST["sifre"])){
    $GelenSifre  = Filtre($_POST["sifre"]);
}
else{
    $GelenSifre  = "";
}

$KontrolSorgusu = $VeriTabaniBaglantisi->prepare("SELECT *FROM uyeler WHERE kullaniciadi = '$GelenKullaniciAdi' AND sifre = '$GelenSifre' ");
$KontrolSorgusu->execute();
$KontrolSayisi  = $KontrolSorgusu->rowCount();

if($KontrolSayisi>0){
    $_SESSION["Kullanici"] =  $GelenKullaniciAdi;
    header("Location:index.php");
    exit();
}
else{
    echo "HATA<br/>";
    echo "Girilen Bilgiler İle Eşleşen Kullanıcı Kaydı Bulunamadı.<br/>";
    echo "Ana Sayfaya Dönmek İçin Lütfen  <a href='index.php'>Buraya Tıklayınız.</a>";
}

?>
