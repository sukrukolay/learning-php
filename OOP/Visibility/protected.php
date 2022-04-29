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
        // class içinde protected olan bir özelliğe erişmek istiyorsak public bir metod tanımlayıp onun vasıtasıyla erişebiliriz. Aşağıdaki örnekte olduğu gibi.
      /*  class Deneme
        {
            protected $Isim            = "Şükrü";
            protected const SOYISIM    = "Kolay";
        
            public function Bilgi()
            {
                return "Adı Soyadı: ".$this->Isim." ".self::SOYISIM;
            }
        }
        
        $Nesne = new Deneme;
        echo $Nesne->Bilgi(); // Ekrana Adı Soyadı: Şükrü Kolay yazar.
        echo "<br/><br/><br/>";
        */

        // eğer protected yerine private olsaydı program hata verecekti.
        // protected olunca ekrana Şükrü Kolay yazacak.
        class Bir
        {
            protected $Isim            = "Şükrü";
            protected const SOYISIM    = "Kolay";
        }
        
        class Iki extends Bir // Bir isimli class'ı miras aldı ve özellik ve metodları Iki adlı sınıfa geçti. protected olduğu için Iki aldı class'ın public metodu sayesinde class dışından erişebildik.
        {
            public function Bilgi()
            {
                return "Adı Soyadı: ".$this->Isim." ".self::SOYISIM;
            }
        }
        $Nesne2 = new Iki;
        echo $Nesne2->Bilgi(); // Ekrana Adı Soyadı: Şükrü Kolay yazar.
    ?>
</body>
</html>