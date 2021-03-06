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

        class Bir{
            public function Deneme(){
                return "Şükrü";
            }
        }

        final class Iki extends Bir{  // final ile türeyecek en son sınıfı belli ederiz. Iki adındaki sınıfdan extends ifadesi ile yeni bir sınıf türetilemez.
            public function Deneme(){
                return "Nuri";
            }
        }

        class Uc extends Iki{
            public function Deneme(){
                return "Muhammed";
            }
  
        }

        class Dort extends Uc{
            public function Deneme(){
                return "İsmail";
            }
            public function ParentininDegeriniDondur(){
                return parent::Deneme(); // Muhammed değerini döndürür.
            }

        }

        class Bes extends Dort{
            public function Deneme(){
                return "Serdar";
            }

            public function Dizi(){
                $Dizi = array(Bir::Deneme(), Iki::Deneme(), Uc::Deneme(), Dort::Deneme(), Bes::Deneme());
                return $Dizi;
            }
        }

        $Sonuc = new Dort;
        echo $Sonuc->ParentininDegeriniDondur();
                      
    ?>
</body>
</html>