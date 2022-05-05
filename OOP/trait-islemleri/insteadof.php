<?php

/*
    Bir sınıf içerisine aktarılan trait'ler içerisinde aynı metod adı varsa bu hatadır.
Bu hatayı çözmek için insteadof kullanılır.
*/
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
        use KisiBir, KisiIki {KisiBir::Goster insteadOf KisiIki ; } // KisiIki trait'inde bulunan Goster() yerine KisiBir trait'inde bulunan Goster() kullanılır.
    }

    $Sonuc = new Deneme;
    echo $Sonuc->Goster();
    // Ekran çıktısı:
    // Şükrü Kolay

?>