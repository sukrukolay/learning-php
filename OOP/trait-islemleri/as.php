<?php

    trait KisiBir{
        public function Goster(){
            $IsimSoyisim = "Şükrü Kolay";
            return $IsimSoyisim;
        }
    }

    trait KisiIki{
        public function Goster(){
            $IsimSoyisim = "Nuri Kolay";
            return $IsimSoyisim;
        }
    }

    class Deneme{
        use KisiBir, KisiIki {KisiBir::Goster insteadOf KisiIki ; KisiBir::Goster as YeniMetodAdi; }
        // KisiBir trait'inde bulunan Goster() metodunun adını as kullanarak YeniMetodAdi yaptık.
    }

    $Sonuc = new Deneme;
    echo $Sonuc->YeniMetodAdi();
    // Ekran çıktısı:
    // Şükrü Kolay

?>