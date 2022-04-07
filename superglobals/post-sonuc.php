<?php

/*
    $_POST : İstek gönderim tag'ları aracılığı ile gelen verilere ulaşabilme
imkanı tanır. Genellikle kapalı yöntemle gelen istekler ve form işleme
işlemleri için kullanılmaktadır.
*/

$isim1 = $_POST["isim"];
$soyIsim1 = $_POST["soyIsim"];

echo $isim1." ".$soyIsim1;

?>