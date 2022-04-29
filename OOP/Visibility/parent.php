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
        
        // parent:: ile metodları alabiliyorken özellikleri alamayız.
        class Bir
        {
            public $Isim = "PHP";
            protected function Bilgi()
            {
                return $this->Isim;;
                
            }
        }
        class Iki extends Bir
        {
            public function Bilgi()
            {
                $Metin = "JS";
                echo $Metin;
                return parent::Bilgi();
            }
        }

        $Nesne = new Iki;
        echo $Nesne->Bilgi();  // JSPHP çıktısını verir.

        echo "<br/><br/><br/>";
        echo "*************************<br/><br/>";

        class Dersler
        {
            public function AAA()
            {
                $Icerik = "A'dan Z'ye PHP Eğitim Seti<br/><br/>";
                echo $Icerik;
            }
            public function BBB()
            {
                $Icerik = "A'dan Z'ye JavaScript Eğitim Seti<br/><br/>";
                echo $Icerik;
            }
            public function CCC()
            {
                $Icerik = "A'dan Z'ye CSS Eğitim Seti<br/><br/>";
                echo $Icerik;
            }
        }

        class Egitmenler extends Dersler
        {
            public function AAA()
            {
                $Kim = "Şükrü Kolay <br/>";
                echo $Kim;
                parent::AAA();
                
                
            }
            public function BBB()
            {
                $Kim = "Nuri Kolay <br/>";
                echo $Kim;
                parent::BBB();
                
            }
            public function CCC()
            {
                $Kim = "Volkan Alakent <br/>";
                echo $Kim;
                parent::CCC();
                
            }
        }
        
        $Nesne = new Egitmenler;
        $Nesne->AAA();
        $Nesne->BBB();
        $Nesne->CCC();
        /**
         *  Aşağıdaki çıktıyı verecektir.
             Şükrü Kolay
            A'dan Z'ye PHP Eğitim Seti

            Nuri Kolay
            A'dan Z'ye JavaScript Eğitim Seti

            Volkan Alakent
            A'dan Z'ye CSS Eğitim Seti
         */
    ?>
</body>
</html>