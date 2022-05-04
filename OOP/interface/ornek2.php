<?php
    interface CRUD{ // CRUD : C-> CREATE  R-> READ  U-> UPDATE  D-> DELETE
        public function Olusturma($TabloDeger, $BenzersizKimlik);
        public function Okuma($TabloDegeri, $BenzersizKimlik);
        public function Duzenleme($TabloDegeri, $BenzersizKimlik);
        public function Silme($TabloDegeri, $BenzersizKimlik);
    }

    /*
    Herhangi bir interface'i implemente eden class'lar implemente ettiği interface'in içinde bulunan metodları kullanmak zorundadır.
    */
    class Test implements CRUD{ 
        public function Olusturma($TabloDeger, $BenzersizKimlik){

        }
        public function Okuma($TabloDeger, $BenzersizKimlik){
            
        }
        public function Duzenleme($TabloDeger, $BenzersizKimlik){
            
        }
        public function Silme($TabloDeger, $BenzersizKimlik){
            
        }

    }
?>