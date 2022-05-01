<?php
    interface Deneme{

        public function Tanim($ParametreIcerigi);
    }

    class Test implements Deneme{
        public function Tanim($ParametreIcerigi){}
        /*eğer Deneme interface'indeki  Tanim metodu burada yani implemete edilen yerde 
        kullanılmasaydı hata olurdu */
    }
?>