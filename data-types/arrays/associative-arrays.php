<?php

$customers = array("ali"=>"18", "irem"=>"22","yasin"=>"50");

echo "ali'nin yasi = ".$customers["ali"]; // $customers dizisinde bulunan "ali" isimli müşteriyle ilişkilendirilmiş şeyi ekrana basar.
echo "<br>";
echo "irem'in yasi = ".$customers["irem"]; // $customers dizisinde bulunan "irem" isimli müşteriyle ilişkilendirilmiş şeyi ekrana basar.
echo "<br>";
echo "yasin'in yasi = ".$customers["yasin"]; // $customers dizisinde bulunan "irem" isimli müşteriyle ilişkilendirilmiş şeyi ekrana basar.
echo "<br>";

// döngü ile yapımı

foreach($customers as $c=> $value){ // ali =>18 gibi bir şey yani $c içindeki değer oluyor $value değişkeni.
    echo "$c nin yasi : ".$value;
    echo "<br>";
}

?>