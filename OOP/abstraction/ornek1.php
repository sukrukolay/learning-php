<?php

    abstract class Tema{
        abstract public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri);
        abstract public function BodyAlani($Icerik);
        abstract public function FooterAlani($CopyMetni);
    }
    class UstAlan extends Tema{
        public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri){

        }

        public function BodyAlani($Icerik){

        }

        public function FooterAlani($CopyMetni){

        }
        /*
        abstract class'tan türeyen alt sınıflarda abstract class'ta bulunan abstract metod kullanıldığı için doğru bir kullanımdır ve hata kodu üretmez.
        */
    }
?>