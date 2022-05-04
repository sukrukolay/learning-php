<?php
    interface Deneme{
        public $Ad = "Kolay"; // interface'ler içerisinde özellikler kullanılırsa hata verir.
        public const SOYISIM = "Kolay"; // interface'ler içerisinde sabitler kullanılırsa hata vermez doğru bir kullanımdır.
    }


    class Test implements Deneme{


    }
?>