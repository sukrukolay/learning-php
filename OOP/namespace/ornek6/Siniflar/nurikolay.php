<?php

/*
    namespace harici dosyalarda dokümanın en başında bulunmalıdır.
    Harici bir class dosyası içerisinde yazılırsa birden fazla namespace tanımlanabilir. Başta ortada sonda farketmez.
*/
    namespace Uyeler\Nuri;
    class Deneme{  
        function AdinNe(){
            return "Nuri";
        }
    }
    namespace Odemeler\Nuri;
    class Test{  
        
        public $Rakam = 2;
    }
?>