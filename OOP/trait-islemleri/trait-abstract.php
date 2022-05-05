<?php
    trait Kisi{
        abstract public function Goster();
    }

    class Deneme{
        use Kisi ;
        public function Goster(){
            $IsimSoyisim = "Şükrü Kolay";
            return $IsimSoyisim;
        }
    }

    $Sonuc = new Deneme;
    echo $Sonuc->Goster(); // normalde private olduğu için hata verir fakat as kullanarak public yaptığımız için hatasız çalışır.
?>