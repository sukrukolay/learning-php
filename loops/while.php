<?php

/*
while(koşul){
 koşul sağlanırsa çalışacak kodlar
}
*/

// 1 den 10 a kadar olan çift sayıları yazdıran döngü
$i = 0;
while($i<10)
{
    if($i%2==0)
    {
        echo $i;
        echo "<br>"; 
    }
    $i++;
}


echo "<br>";

// 1+2+3+4+5+6+7+8+9+10=55 şeklinde yazdıran döngü
$i = 1;
$sum = 0;
echo "$i ";
$sum+=$i;
while($i<10)
{
    $i++;
    echo "+$i ";
    $sum+=$i;
}
echo "= $sum";

?>