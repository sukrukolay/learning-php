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
    
    $YasamSuresi    = time()+(60*5);
    setcookie("Kullanici[Adi]","Şükrü",$YasamSuresi);
    setcookie("Kullanici[Soyadi]","Kolay",$YasamSuresi);
    setcookie("Kullanici[EmailAdresi]","deneme@gmail.com",$YasamSuresi);
    setcookie("Kullanici[Telefonu]","123456",$YasamSuresi);
    /**
     * Kullanici
     *      Adi
     *      Soyadi
     *      EmailAdresi
     *      Telefonu
     */

    setcookie("Sepet[Id]","5",$YasamSuresi);
    setcookie("Sepet[Tutari]","1250",$YasamSuresi);
    setcookie("Sepet[TaksitSayisi]","6",$YasamSuresi);
    setcookie("Sepet[OdemeTuru]","Kredi Kartı",$YasamSuresi);
    
    echo "<pre>";
    print_r($_COOKIE);
    echo "<pre/>";
    echo "<br/>";
    /**
     * Array
        (
            [Kullanici] => Array
                (
                    [Adi] => Şükrü
                    [Soyadi] => Kolay
                    [EmailAdresi] => deneme@gmail.com
                    [Telefonu] => 123456
                )
                
            [Sepet] => Array
                (
                    [Id] => 5
                    [Tutari] => 1250
                    [TaksitSayisi] => 6
                    [OdemeTuru] => Kredi Kartı
                )
                
        )
     */

    echo "<pre>";
    print_r($_COOKIE["Sepet"]);
    echo "<pre/>";

        /**
     * Array
        (
            [Id] => 5
            [Tutari] => 1250
            [TaksitSayisi] => 6
            [OdemeTuru] => Kredi Kartı
        )

     */
    ?>
</body>
</html>