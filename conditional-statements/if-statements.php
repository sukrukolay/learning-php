<?php
$not = 73;
if($not <"50") //$not 50den küçükse kaldiniz yazdir.
{
    echo "Kaldiniz";
}
else if($not > 50 && $not <80){ //$not 50 den büyük ve 80 den küçükse geçtiniz yazdir.
    echo "Geçtiniz";
}
else if($not >=80 && $not <=100){ //$not 80 den büyük eşit ve 100 den küçük eşitse mükemmel yazdir.
    echo "Mükemmel";
}

echo "<br>";
$saat = date("H"); //$saat değerine şu anki saat değerini at.
if($saat < 10){ // $saat 10 dan küçükse sabah yazdir.
    echo "sabah";
}
else if($saat > 10 && $saat <16 ){ // $saat 10 dan büyükse ve 19 dan küçükse öğle yazdir.
    echo "öğle";
}
else{ // üstteki if lerden hiçbirisine uymuyorsa akşam yazdir.
    echo "akşam";
}
?>