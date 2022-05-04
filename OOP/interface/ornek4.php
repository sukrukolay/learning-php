<?php
    interface CRUD{ // CRUD : C-> CREATE  R-> READ  U-> UPDATE  D-> DELETE
        private function Olusturma($TabloDeger, $BenzersizKimlik); // interface'de kullanılan metodlar public olmak zorundadır. protected veya private olursa hata verir.
        protected function Okuma($TabloDegeri, $BenzersizKimlik);  // interface'de kullanılan metodlar public olmak zorundadır. protected veya private olursa hata verir.
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