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
    /**
     * public       :   Her yerden erişilebilir.
     * private      :   Yalnızca sınıf içerisinden erişilebilir.
     * protecded    :   Sınıf içerisinden ve türetilen sınıflardan erişilebilir.
     * 
     * static       :   Sınıf içerisindeki herhangi bir özellik veya metoda sınıf sınıf çağrılmadan erişilebilir.
     * 
     * $this        :   Bu sınıfda şeklinde sınıfı işaret etmek için kullanılır.
     * self::       :   Kendi sınıfımda şeklinde sınıfı işeret etmek için kullanılır.
     * parent::     :   Ebeveyn sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
     */

        // public yazanlar private veya protected olsaydı dışarıdan erişmemiz ve veya değiştirmemiz mümkün olmayacaktı.
        class Bir
        {
            public $Isim            = "Şükrü";
            public const SOYISIM    = "Kolay";
            public function Bilgi()
            {
                return "OOP öğreniyor ";
            }
        }

        $Nesne = new Bir;
        echo "İsim Soyisim : ".$Nesne->Isim." ".Bir::SOYISIM ." ".$Nesne->Bilgi();
    ?>
</body>
</html>