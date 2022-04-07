<?php



/*
$_GET
    URL üzerinden gelen verilere ulaşabilme imkanı tanır. Genellikle URL
üzerinden gelen istekler ve form işleme işlemleri için kullanılmaktadır.
*/

// http://localhost/learning-php/superglobals/gets-sonuc.php?isim=sukru&soyIsim=kolay
// adres çubuğundan gelen verilere $_GET superglobali ile erişilir.
$gelenIsimDegeri    = $_GET["isim"];
$gelenSoyIsimDegeri = $_GET["soyIsim"];

echo $gelenIsimDegeri." ".$gelenSoyIsimDegeri;
?>