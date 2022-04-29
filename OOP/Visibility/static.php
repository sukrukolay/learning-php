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

        class Islem
        {
            public static $Isim = "Şükrü<br/>";
            //public static const SOYISIM = "Kolay";
            public static function Deneme()
            {
                echo "Deneme fonksiyonu";
            }
        }

        class Islem2 extends Islem
        {

        }
        echo Islem::$Isim; // new demeden yani nesneyi oluşturmadan class içerisinden static değişken çağırma bu şekilde olmaktadır. (class_adi::$özellik)
        //echo Islem::SOYISIM; //static ifadesi const için kullanılmaz! hata verir.
        echo Islem::Deneme();
        echo "<br/>";
        Islem2::Deneme(); // Islem2 class'ı Islem class'ını miras alsa da static fonksiyonu da direkt olarak alır ve hatasız çalıştırır.
    ?>
</body>
</html>