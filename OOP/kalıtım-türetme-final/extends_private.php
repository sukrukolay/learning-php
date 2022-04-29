<?php
    class DenemeBir
    {
        private $Isim       = "Şükrü";
    }
    class DenemeIki extends DenemeBir
    {

    }


    $Sonuc = new DenemeIki;
    echo $Sonuc->Isim; // Özellik private olduğu için hata verir.
?>