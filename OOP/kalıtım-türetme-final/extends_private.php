<?php
    class DenemeBir
    {
        private $Isim       = "Şükrü";
    }
    class DenemeIki extends DenemeBir
    {

    }


    $Sonuc1 = new DenemeIki;
    echo $Sonuc1->Isim; // Özellik private olduğu için hata verir.
?>