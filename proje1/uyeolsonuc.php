<?php
// session_start();
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

if(isset($_POST["adsoyad"])){
    $GelenAdSoyad  = Filtre($_POST["adsoyad"]);
}
else{
    $GelenAdSoyad  = "";
}


if(isset($_POST["emailadresi"])){
    $GelenEmail  = Filtre($_POST["emailadresi"]);
}
else{
    $GelenEmail  = "";
}


$KontrolSorgusu = $VeriTabaniBaglantisi->prepare("SELECT *FROM uyeler WHERE kullaniciadi = '$GelenKullaniciAdi' OR sifre = '$GelenEmail' ");
$KontrolSorgusu->execute();
$KontrolSayisi  = $KontrolSorgusu->rowCount();
    if($KontrolSayisi>0){
        echo "HATA";
        echo "Kullanıcı Adı veya E-Mail Adresi Başka Bir Kullanıcı Tarafından Kullanılmaktadır.<br/>";
        echo "Ana Sayfaya Dönmek İçin Lütfen  <a href='index.php'>Buraya Tıklayınız.</a>";
    }
    else{

        $KayitEklemeSorgusu     = $VeriTabaniBaglantisi->prepare("INSERT INTO uyeler (kullaniciadi,sifre,adisoyadi,emailadresi,kayittarihi) value
        (?,?,?,?,?)");
        $KayitEklemeSorgusu->execute([$GelenKullaniciAdi, $GelenSifre, $GelenAdSoyad, $GelenEmail, $ZamanDamgasi]);
        $KayitKontrol   = $KayitEklemeSorgusu->rowCount();
        if($KayitKontrol>0){
            echo "Tebrikler.<br/>";
            echo "Kayıt Başarıyla Eklendi.<br/>";
            echo "Ana Sayfaya Dönmek İçin Lütfen  <a href='index.php'>Buraya Tıklayınız.</a>";
        }
        else{
            echo "HATA<br/>";
            echo "Kullanıcı Kaydı Sırasında Beklenmeyen Bir Hata Oluştu.<br/>";
            echo "Ana Sayfaya Dönmek İçin Lütfen  <a href='index.php'>Buraya Tıklayınız.</a>";
        }
        
    }


?>
