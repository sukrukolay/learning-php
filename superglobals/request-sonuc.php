<?php

/*
    $_REQUEST: URL üzerinden veya istek gönderim tag'ları aracılığıyla gelen verilere
ulaşabilme imkanı tanır. Genellikle URL üzerinden gelen istekler, kapalı yöntemle gelen
istekler ve form işleme işlemleri için kullanılmaktadır.
GET VE POST' un yaptıklarını tek başına yapabilir.
*/

    $gelenAd    = $_POST["isim"];
    $gelenSoyad = $_POST["soyIsim"]; 
    echo $gelenAd." " .$gelenSoyad;
?>