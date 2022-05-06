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
        class Hesap{
            private $Sonuc ;
            function __construct($SayiDegeri){
                $this->Sonuc = $SayiDegeri;
            }

            public function Toplama($SayiDegeri){
                $this->Sonuc += $SayiDegeri;
                return $this;
            }

            public function Cikartma($SayiDegeri){
                $this->Sonuc -= $SayiDegeri;
                return $this;
            }

            public function Carpma($SayiDegeri){
                $this->Sonuc *= $SayiDegeri;
                return $this;
            }

            public function Bolme($SayiDegeri){
                $this->Sonuc /= $SayiDegeri;
                return $this;
            }

            public function Goster(){
                echo $this->Sonuc;
                return $this->Sonuc;
            }
        }
        $Islem = new Hesap(100);

        $Islem->Toplama(50)->Cikartma(25)->Carpma(4)->Bolme(100)->Goster();
    ?>
</body>
</html>