<?php
    
    /*
        trait       : class'lar için özellik ve metod gruplarının oluşturulması için kullanılır.
        use         : Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu ilgili sınıfa tanımlamak / uygulamak için kullanılır. 
        insteadof   : class için tanımlanmış olan özellik ve metod gruplarında tercih / seçim işlemleri için kullanılır. 
        as          : class için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirleme veya görünürlük atama işlemleri için kullanılır.  
    */

    trait AdSoyad{
        
        public $Isim    = "Şükrü";
        public $Soyisim = "Kolay";
    }

    trait Bilgi{

        use AdSoyad;
        public function Tanimlar(){
            $Metin = "Konya Teknik Üniversitesi";
            return $Metin;
        }

    }
    class Deneme{
        use Bilgi; //tek bir trait ile çok trait kullanmak. Bilgi trait'i içerisindeki AdSoyad trait'ini dolaylı olarak çağırdık.
    }

    $Sonuc = new Deneme;
    echo $Sonuc->Isim." ".$Sonuc->Soyisim."<br/>";
    echo $Sonuc->Tanimlar()."<br/>";
    /*
     Şükrü Kolay
     Konya Teknik Üniversitesi
     */
?>