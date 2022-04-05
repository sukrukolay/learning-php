<?php

/*
for (başlangıç değeri; kontrol değeri; artirma veya azaltma değeri) {
  code to be executed for each iteration;
}
*/
    // 1 den 10 a kadar tek sayıları yazdıran döngü
    $j =0; // j kullanmamaın amacı 1.2. 3. vs gibi yazdırmak için.
    for($i = 0 ; $i < 10 ; $i++) 
    {
        if($i%2==1)
        {
            $j++;
            echo "$j.sayi: ".$i;
            echo "<br>";
        }
    }
?>