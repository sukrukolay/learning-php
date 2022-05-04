<?php
    
    interface CRUD{ // CRUD : C-> CREATE  R-> READ  U-> UPDATE  D-> DELETE
        public function Olusturma($TabloDeger, $BenzersizKimlik);
        public function Okuma($TabloDegeri, $BenzersizKimlik);
        public function Duzenleme($TabloDegeri, $BenzersizKimlik);
        public function Silme($TabloDegeri, $BenzersizKimlik);
    }

    abstract class Tema{
        abstract public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri);
        abstract public function BodyAlani($Icerik);
        abstract public function FooterAlani($CopyMetni);
    }

    class UstAlan extends Tema implements CRUD{ //extends implements den önce kullanılmak koşuluyla class'larda hem extends hem de implements aynı anda yapılabilir. 
        public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri){

        }

        public function BodyAlani($Icerik){

        }

        public function FooterAlani($CopyMetni){

        }

        
        public function Olusturma($TabloDeger, $BenzersizKimlik){

        }
        public function Okuma($TabloDeger, $BenzersizKimlik){
            
        }
        public function Duzenleme($TabloDeger, $BenzersizKimlik){
            
        }
        public function Silme($TabloDeger, $BenzersizKimlik){
            
        }

    }
    /*
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
    */

?>