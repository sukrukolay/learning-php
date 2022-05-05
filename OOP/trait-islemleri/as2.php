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
        use KisiBir, KisiIki {
            KisiBir::Goster insteadOf KisiIki;
            KisiBir::Goster as YazBir;
            KisiIki::Goster as YazIki;
        }
        /*
            2 trait içerisinde aynı adlı metodlar varsa insteadOf ile bir tanesini seçmeliyiz. Sonrasında as kullanarak adlarını değiştirebiliriz.
        */
    }

    $Sonuc = new Deneme;
    echo $Sonuc->YazBir()."<br/>";
    echo $Sonuc->YazIki();
    // Ekran çıktısı:
    //Şükrü Kolay
    //Nuri Kolay
?>