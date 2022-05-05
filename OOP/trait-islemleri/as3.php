<?php
    trait Kisi{
        private function Goster(){
            $IsimSoyisim = "Şükrü Kolay";
            return $IsimSoyisim;
        }
    }

    class Deneme{
        use Kisi {Kisi::Goster as public;}     
    }

    $Sonuc = new Deneme;
    echo $Sonuc->Goster(); // normalde private olduğu için hata verir fakat as kullanarak public yaptığımız için hatasız çalışır.
?>