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

    /* var : Herhangi bir sınıf içerisinde standart değişken tanımlamak için kullanılır.
    const ve function başında kullanılmaz.
    */
        class Deneme{
            var $Isim   = "Şükrü";


            // fonksiyonlarda ve const'larda var kullanılırsa hata verir.
            /* 
            var const SOYISIM = "Kolay";
            var function a(){
                echo "a fonksiyonu";
            }
            */
        }
        $Islem  = new Deneme;
        echo $Islem->Isim;
       // echo Deneme::SOYISIM; //hata verir.
        // echo $Islem->a(); //hata verir.
    ?>
</body>
</html>