<?php

/*
sort() - küçükten büyüğe
rsort() - büyükten küçüğe
asort() - ilişkisel dizileri değere göre artan düzende
ksort() - ilişkisel dizileri anahtara göre artan düzende
arsort() - ilişkisel dizileri değere göre azalan düzende
krsort() - ilişkisel dizileri anahtara göre azalan düzende
*/

$cars = array("Volvo", "BMW", "Toyota");
sort($cars); //alfabetik sıraladı

for($i = 0;$i<count($cars);$i++)
{
    echo $cars[$i];
    echo "<br>";
}
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers); //küçükten büyüğe sıraladı.
for($i = 0;$i<count($numbers);$i++)
{
    echo $numbers[$i]. " ";
}

echo "<br>";echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars); //ters alfabetik sıraladı

for($i = 0;$i<count($cars);$i++)
{
    echo $cars[$i];
    echo "<br>";
}

echo "<br>";echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers); // büyükten küçüğe sıraladı.
for($i = 0;$i<count($numbers);$i++)
{
    echo $numbers[$i]. " ";
}


echo "<br>";echo "<br>";
$age = array("Ali"=>"10", "Burak"=>"30", "Cevdet"=>"20"); 
asort($age); //değere göre artan şekilde sıraladı.

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


echo "<br>";echo "<br>";
$age = array("Ali"=>"10", "Burak"=>"30", "Cevdet"=>"20"); 
ksort($age); //anahtara göre artan şekilde sıraladı.

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

echo "<br>";echo "<br>";
$age = array("Ali"=>"10", "Burak"=>"30", "Cevdet"=>"20");
arsort($age); // değere göre azalan

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


echo "<br>";echo "<br>";
$age = array("Ali"=>"10", "Burak"=>"30", "Cevdet"=>"20");
krsort($age); // anahtara göre azalan 

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}



?>