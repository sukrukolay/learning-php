<?php
    interface Deneme{

        public function Tanim($ParametreIcerigi);
    }

    class TestBir implements Deneme{

        /*eğer Deneme interface'indeki  Tanim metodu burada yani implemete edilen yerde 
        kullanılmasaydı hata olurdu. Yani burada hata vardır. */
    }

    class TestIki implements Deneme{
        
        /*eğer Deneme interface'indeki  Tanim metodu burada yani implemete edilen yerde 
        kullanılmasaydı hata olurdu Yani burada hata vardır. */
    }
?>