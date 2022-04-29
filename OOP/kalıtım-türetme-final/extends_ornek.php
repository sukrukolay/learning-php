<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Islemler{
            public $IsimSoyisim;
            public $AylikGelir;
            public $AylikGider;

            public function IsimGoster($AdSoyad){
                $this->IsimSoyisim = $AdSoyad;
            }

            public function GelirGoster($GelirTutari){
                $this->AylikGelir = $GelirTutari;
            }

            public function GiderGoster($GiderTutari){
                $this->AylikGider = $GiderTutari;
            }

            public function GelirGiderHesaplamasi(){
                $NetKazanilan = ($this->AylikGelir) - ($this->AylikGider);
                return $NetKazanilan;
            }
            
            public function AltiAylikKazanilan(){
                $AltiAylikNetKazanilan = 6*( ($this->AylikGelir) - ($this->AylikGider));
                return $AltiAylikNetKazanilan;
            }

            public function YillikKazanilan(){
                $YillikNetKazanilan = 12*( ($this->AylikGelir) - ($this->AylikGider));
                return $YillikNetKazanilan;
            }

        }

        class ElemanlarDahili extends Islemler{ }
        class ElemanlarHarici extends Islemler{ }


        $BirinciKisi = new ElemanlarDahili;
        $BirinciKisi->IsimGoster("Şükrü Kolay");
        $BirinciKisi->GelirGoster(10000);
        $BirinciKisi->GiderGoster(4000);

        echo "Şükrü Kolay isimli şahsın aylık geliri 10.000 TL'dir. Aylık gideri 4.000 TL'dir. Aylık net kazancı ".$BirinciKisi->GelirGiderHesaplamasi() ."TL'dir.<br/>";
        echo "Şükrü Kolay isimli şahsın 6 aylık net kazancı ".$BirinciKisi->AltiAylikKazanilan() ."TL'dir.<br/>";
        echo "Şükrü Kolay isimli şahsın yıllık net kazancı ".$BirinciKisi->YillikKazanilan() ."TL'dir.<br/><br/>";



        $IkinciKisi = new ElemanlarDahili;
        $IkinciKisi->IsimGoster("Nuri Kolay");
        $IkinciKisi->GelirGoster(5000);
        $IkinciKisi->GiderGoster(500);

        echo "Nuri Kolay isimli şahsın aylık geliri 5.000 TL'dir. Aylık gideri 500 TL'dir. Aylık net kazancı ".$IkinciKisi->GelirGiderHesaplamasi() ."TL'dir.<br/>";
        echo "Nuri Kolay isimli şahsın 6 aylık net kazancı ".$IkinciKisi->AltiAylikKazanilan() ."TL'dir.<br/>";
        echo "Nuri Kolay isimli şahsın yıllık net kazancı ".$IkinciKisi->YillikKazanilan() ."TL'dir.<br/><br/>";


        $UcuncuKisi = new ElemanlarHarici;
        $UcuncuKisi->IsimGoster("İsmail Kolay");
        $UcuncuKisi->GelirGoster(6000);
        $UcuncuKisi->GiderGoster(1300);

        echo "İsmail Kolay isimli şahsın aylık geliri 6.000 TL'dir. Aylık gideri 1300 TL'dir. Aylık net kazancı ".$UcuncuKisi->GelirGiderHesaplamasi() ."TL'dir.<br/>";
        echo "İsmail Kolay isimli şahsın 6 aylık net kazancı ".$UcuncuKisi->AltiAylikKazanilan() ."TL'dir.<br/>";
        echo "İsmail Kolay isimli şahsın yıllık net kazancı ".$UcuncuKisi->YillikKazanilan() ."TL'dir.<br/>";


    ?>
</body>
</html>