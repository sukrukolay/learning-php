<?php
    class Bir{
        final public function Deneme(){ // Deneme adındaki metodda final ifadesi kullanıldığı için artık bu metod ismi alt sınıf veya sınıflarda yeniden kullanılamaz.
            return "Şükrü";
        }
    }
    class Iki extends Bir{
         public function Deneme(){
            return "Nuri";
        }
    }
    $Sonuc =new  Iki;
    echo $Sonuc->Deneme(); // program hata verir, sebebi ise parent sınıfında bulunan Deneme() fonksiyonunun final olarak tanımlanmasıdır.
?>