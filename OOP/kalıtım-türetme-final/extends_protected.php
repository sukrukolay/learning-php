<?php
    /* 
    extends  :   Bir sınıfı başka bir sınıftan türetmek istediğimizde kullanılır. 
    final    :   En son kullanılan sınftır ve türeyen son sınıf anlamını taşır. Ayrıca metodlar üzerinde de kullanılabilir ve final tanımlanırsa
    bağlı sınıflar içerisinde metod adı kullanılamaz.
     */

     class DenemeBir
     {
         public $Isim       = "Şükrü";
         protected $SoyIsim = "Kolay";
        //  private $Isim2     = "Nuri"; // private sadece kendi sınıfı içinden erişim sağladığından dolayı miras alınamaz.
        public function SoyadVer() // eğer protected bir özelliğe dışarıdan erişmek istiyorsak public bir fonksiyon aracılığıyla erişebiliriz.
        {
            echo $this->SoyIsim;
        }
     }
     class DenemeIki extends DenemeBir
     {

     }

     // Bu kod hata verecektir.
     /*$Sonuc = new DenemeIki;
       $Sonuc->SoyIsim; 
     */

     $Sonuc = new DenemeIki;
     echo $Sonuc->Isim ; // Isim değişkeni public olduğu için ekrana Şükrü yazar.
    //  echo $Sonuc->SoyadVer(); // ekrana public fonksiyon sayesinde Kolay yazar.
    //echo $Sonuc->SoyIsim; // Özellik protected olduğu için hata verir. 


    echo "<br/><br/>-----------------------------------<br/><br/>";
    //protected kalıtım yoluyla türeyen sınıfta nasıl çalışır ? 

    class OrnekBir
    {
        protected $Isim = "Şükrü";
    }
    class OrnekIki extends OrnekBir
    {
        // eğer miras alınan sınıftan protected bir metod veya özellik kullanılmak istenirse bu class içine dahil etmek zorundayız.
        function Dondur()
        {
            return $this->Isim;
        }
    }

    $Sonuc = new OrnekIki;
    echo $Sonuc->Dondur();
    
?>