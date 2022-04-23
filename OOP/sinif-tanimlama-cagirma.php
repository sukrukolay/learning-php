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
/*
  Class : Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelere verilen isimdir.
  
  new : Daha önceden tanımlanmış olan herhangi bir sınıfı çağırmak için kullanılır.
  Kurallar 
  1. Sınıf isimleri her zaman anlamlı kullanılmalıdır. 
  2. Sınıf isimlerinde (a-z A-Z 0-9) ve (alt çizgi(_)) kullanılabilir.
  3. Sınıf isimleri mutlaka bir harf veya _ ile başlamalıdır. Hiçbir zaman da rakam ile başlayamaz.
  4. Sınıf isimleri içerisinde hiçbir zaman boşluk,türkçe karakterler ve özel karakterler kullanılamaz.
  5. Sınıf isimleri tanımlanırken PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz. 
  6. Sınıf isimleri hiçbir zaman birden fazla kes kullanılamaz.(Namespace(isim uzayı kullanılması durumunda birden fazla kez kullanılabilir))
  7. İsimleri küçük harfe büyük harfe duyarlı değildir.
  8. Sınıf kapsama / etki alanı kurallarına tabidir.
  
  YAPISI
  class isim{
    kod blokları
  }

*/
    class IsimSoyisim{

        /*Özellik*/
        public $Isim          = "Şükrü";
        public const SOYISIM  = "Kolay";
        public const Sabit    = "const ile tanımlandı"; //const tanımlanırken $ işareti kullanılmaz.
        /*Özellik*/

        /*Metod*/
        public function Bilgiler(){
            $Meslek = "Öğrenci ";
            $Sehir  = "Konya ";
            $Metin  = "Mesleği: ".$Meslek."<br/>Yaşadığı şehir:".$Sehir;
            return $Metin;
        }
        /*Metod*/
    }

    $Sonuc = new IsimSoyisim; 
    echo "Adı: ".$Sonuc->Isim ."<br/>";
    echo "Soyadı ".IsimSoyisim::SOYISIM ."<br/>";// const içeriği yazdırılırken class_adi::const_degiskeni şeklinde yazdırılır
    echo "<br/>Kişisel Bilgiler: <br/>".$Sonuc->Bilgiler()  ."<br/>";//fonk çağırmak içinde değişken çağırmak gibi class'ı atadığımız değişkene -> işareti ve ardından fonk. ismini çağırırız.
    

    ?>
</body>
</html>