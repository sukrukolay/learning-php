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
         * Fonksiyona dışarıdan erişebilmek için public olması gerekiyor. private ve protected olursa dışarıdan erişemiyoruz.
         */
        class Deneme
        {
            public function Selam($Isim,$SoyIsim)
            {
                return "Merhaba ".$Isim." ".$SoyIsim." nasılsın ?";
            }
        }
        $Islem = new Deneme;
        echo $Islem->Selam("Şükrü","Kolay");
        echo "<br/>";
         

        class Deneme2
        {
            public $a,$b;
            public function Selam($a,$b)
            {
                return "Merhaba ".$a." ".$b." nasılsın ?";
            }
        }

        $Islem2 = new Deneme2;
        $Islem2->a = "Nuri";
        echo $Islem2->Selam($Islem2->a,"Kolay"); // Nuri Kolay yazar.
        echo "<br/>";
    ?>
</body>
</html>