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

        class Bicimlendir{
            public $Yazi;
            public $Stil;
            public $Boyut;
            public function Metin($MetinDegeri){
                $this->Yazi = $MetinDegeri;
                return $this;
            }

            public function Renk($RenkDegeri){
                $this->Stil = "color:".$RenkDegeri ." ;";
                return $this;
            }

            public function Boyut($BoyutDegeri){
                $this->Stil .= "font-size:".$BoyutDegeri;
                return $this;
            }

            public function Olustur(){
                return "<div style='" . $this->Stil . "'>". $this->Yazi . "</div>";
            }
        }

        $Sonuc = new Bicimlendir;
        echo $Sonuc->Metin("Şükrü Kolay")->Renk("red")->Boyut("20px")->Olustur() ."<br/>";
        echo $Sonuc->Metin("Nuri Kolay")->Renk("orange")->Boyut("30px")->Olustur() ."<br/>";
        echo $Sonuc->Metin("Muhammed Şirin")->Renk("blue")->Boyut("40px")->Olustur() ."<br/>";
        
        
        /*
        // üstteki gibi tek satırda yazmazsak alttaki gibi çok satırda yazmak gerekir.
        echo "<br/><br/>";
        $Sonuc->Metin("Şükrü Kolay");
        $Sonuc->Renk("red");
        $Sonuc->Boyut("20px");
        echo $Sonuc->Olustur();
         */
    ?>

</body>
</html>