<?php
$not = 73;
if($not <"50")
{
    echo "Kaldiniz";
}
else if($not > 50 && $not <80){
    echo "Geçtiniz";
}
else if($not >=80 && $not <=100){
    echo "Mükemmel";
}

echo "<br>";
$saat = date("H");
if($saat < 10){
    echo "sabah";
}
else if($saat > 10 && $saat <19 ){
    echo "öğlen";
}
else{
    echo "gece";
}
?>