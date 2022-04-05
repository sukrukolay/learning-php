<?php

/*
break komutu çalıştığında döngü o anda kesilir ve biter.
continue komutu çalıştığında döngü o anki değeri yok sayar atlar ve çalışmasına devam eder.
*/

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) { // $x değeri 4 olduğunda döngü biter ve 1-2-3 değerleri ekrana basılır.
      break;
    }
    echo "The number is: $x <br>";
  }
  
  echo "<br>";
  
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) { // $x değeri 4 olduğunda 4 değeri atlanır ve devam eder. Ekrana 1-2-3-5-6... değerleri basılır.
      continue;
    }
    echo "The number is: $x <br>";
  }


?>