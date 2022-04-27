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

        class Deneme
        {
            public $Isim    = "Şükrü";
            public $SoyIsim = "Kolay";
        }

        // class ta bulunan bir değişkeni class dışından değiştirmek için önce class çağrılır ardından aşağıdaki şekilde değer atanır.
        $Islem  = new Deneme;
        $Islem->Isim="Nuri";
        echo $Islem->Isim ."<br/>";
        echo $Islem->SoyIsim."<br/>";
    ?>
</body>
</html>