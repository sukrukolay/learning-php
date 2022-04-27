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
    
    // __construct()  = Belirtilecek olan sınıfa yapıcı metod tanımlamak için kullanılır.
    // __destruct()  = Belirtilecek olan sınıfa yıkıcı metod tanımlamak için kullanılır.
    
    // class çağrıldığı andan itibaren ilk olarak __construct(), en son olarak da __destruct() metodları çalışır.
    class Deneme{

        public function __construct()
        {
            echo "Yapıcı metod <br/>";
        }
        public $Isim    = "Şükrü";
        public $Soyisim = "Kolay";
        public function yaz()
        {
            $Metin  = "yaz fonksiyonu içindeyim";
            return $Metin;
        } 

        public function __destruct()
        {
            echo " <br/>Yıkıcı metod <br/>";
        }
    }
    
    $IslemYap   = new Deneme;
    echo $IslemYap->yaz();
    ?>
</body>
</html>