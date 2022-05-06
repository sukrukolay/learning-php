<?php

/*
    namespace harici dosyalarda dokümanın en başında bulunmalıdır.
    Harici bir class dosyası içerisinde yazılırsa birden fazla namespace tanımlanabilir. Başta ortada sonda farketmez.
*/

    namespace Uyeler\Muhammed\Islemler\Kaydet;
    class Deneme{  
        function AdinNe(){
            return "Muhammed";
        }
    }
    namespace Odemeler\Muhammed;
    class Test{  
        
        public $Rakam = 3;
    }
?>