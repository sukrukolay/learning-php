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
    echo $Sonuc->Goster(); // trait içinde abstract class tanımlayıp kullanıldığı class'ta body'si yazılarak sorunsuz bir şekilde çalıştı.
?>