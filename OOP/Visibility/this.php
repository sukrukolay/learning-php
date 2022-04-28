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

        class Bir
        {
            public $Isim            = "Şükrü";
            public const SOYISIM    = "Kolay";
            public function Bilgi()
            {
                // $this->Isim; demek kullanıldığı sınıfın içerisinde bulunan $Isim özelliğini ifade eder.
                // const'larda self:: kullanılır.
                return "Isim : ".$this->Isim." Soyisim : ". self::SOYISIM; 
            }
        }

        $Nesne = new Bir;
        echo $Nesne->Bilgi();
        // echo "İsim Soyisim : ".$Nesne->Isim." ".Bir::SOYISIM ." ".$Nesne->Bilgi();
    ?>
</body>
</html>