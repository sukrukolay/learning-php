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

        class Iki extends Bir{
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

        }

        class Bes extends Dort{
            public function Deneme(){
                return "Serdar";
            }

        }

       $Sonuc = new Bes;
       echo $Sonuc->Deneme(); // Bes isimli class içindeki Serdar' ı yazar. Eğer Bes içinde foksiyon olmasaydı bir üstüne bakar oradaki değeri yazardı.

    ?>
</body>
</html>