<?php

/*
    namespace harici dosyalarda dokümanın en başında bulunmalıdır.
    Harici bir class dosyası içerisinde yazılırsa birden fazla namespace tanımlanabilir. Başta ortada sonda farketmez.
*/
    namespace Uyeler\Sukru;
    class Deneme{  
        function AdinNe(){
            return "Şükrü";
        }
    }

    namespace Odemeler\Sukru;
    class Test{  
        
        public $Rakam = 1;
    }
?>