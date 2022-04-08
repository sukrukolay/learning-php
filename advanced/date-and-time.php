<?php

/**
H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
 */

echo " Yıl/Ay/Gün: ". date("Y/m/d"); //Yıl/Ay/Gün: 2022/04/08
echo "<br>";
echo " Yıl-Ay-Gün: ". date("Y-m-d"); //Yıl-Ay-Gün: 2022-04-08
echo "<br>";
echo " Yıl.Ay.Gün: ". date("Y.m.d"); //Yıl.Ay.Gün: 2022.04.08
echo "<br>";
echo "Bugün günlerden : " .date("l"); //Bugün günlerden : Friday
echo "<br>";

$tarih = date("d-m-Y H:i:s"); // date(formatını belirtiriz.)
echo "Şu an tarih tam olarak: " .$tarih; // Şu an tarih tam olarak: 08-04-2022 13:17:58
echo "<br>";

date_default_timezone_set("Europe/Istanbul"); //  date_default_timezone_set(kıta/şehir) 
echo "The time is " . date("h:i:s a")." in Istanbul";
echo "<br>";

?>