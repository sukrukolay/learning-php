<?php

//Çok boyutlu diziler 
// araba dizisi içinde bulunan her bir arabanın modeli adeti ve fiyatı vardır.

$cars = array (array("Volvo",22,10000), array("BMW",15,150000), array("Saab",5,200000), array("Land Rover",17,250000) );

echo "1. araba= ".$cars[0][0]. " fiyati = ".$cars[0][2]." adeti ".$cars[0][1];echo "<br>";
echo "2. araba= ".$cars[1][0]. " fiyati = ".$cars[1][2]." adeti ".$cars[1][1];echo "<br>";
echo "3. araba= ".$cars[2][0]. " fiyati = ".$cars[2][2]." adeti ".$cars[2][1];echo "<br>";
echo "4. araba= ".$cars[3][0]. " fiyati = ".$cars[3][2]." adeti ".$cars[3][1];echo "<br>";

// bütün elemanları yazdırmak için iç içe for döngüsü olması lazım

for($i = 0; $i<4;$i++) //elemanları kontrol etmek için 4 kere dönecek
{ 
    
    for($j=0 ; $j <3;$j++) // özellikleri kontrol etmek için 3 kere dönecek
    {
        echo $cars[$i][$j];
        echo "<br>";
    }
    echo "<br>";
}
?>