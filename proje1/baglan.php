<?php
//session_start();
ob_start();
try{
    $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=projeler;charset=UTF8","root","");
}catch(PDOException $Hata){
    echo "Bağlantı Hatası.<br/>";
    echo "Hata Açıklaması : ".$Hata->getMessage();
    die();
}

function Filtre($Deger){
    $Bir    = trim($Deger);
    $Iki    = strip_tags($Bir);
    $Uc     = htmlspecialchars($Iki,ENT_QUOTES);
    $Sonuc  = $Uc;
    return $Sonuc;   
}

$ZamanDamgasi   = time();

if(isset($_SESSION["Kullanici"])){
    $UyelerSorgusu      = $VeriTabaniBaglantisi->prepare("SELECT *FROM uyeler WHERE kullaniciadi =? ");
    $UyelerSorgusu->execute([ $_SESSION["Kullanici"]]);
    $UyelerKayitSayisi  = $UyelerSorgusu->rowCount();
    $UyelerKaydi        = $UyelerSorgusu->fetch(PDO::FETCH_ASSOC);
        if($UyelerKayitSayisi>0){
            $UyeninAdiSoyadi    = $UyelerKaydi["adisoyadi"];
        }else{
            $UyeninAdiSoyadi    ="";
        }
}

?>