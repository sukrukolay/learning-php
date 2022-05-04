<?php
    

    interface Olusturma{
        public function Olusturma($TabloDeger, $BenzersizKimlik);
    }
    interface Okuma{
        public function Okuma($TabloDeger, $BenzersizKimlik);
    }
    interface Duzenleme{
        public function Duzenleme($TabloDeger, $BenzersizKimlik);
    }
    interface Silme{
        public function Silme($TabloDeger, $BenzersizKimlik);
    }


    class Test implements Olusturma, Okuma, Duzenleme, Silme{ // Herhangi bir sınıfta birden fazla interface (arayüz) kullanılabilir.
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