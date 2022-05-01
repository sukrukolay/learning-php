<?php
    // public, private veya protected tanımlanabilirler.
    abstract class Deneme{
        public $IsimBir            = "Şükrü";
        public const SOYISIMBIR    = "Kolay"; 

        private $IsimIki            = "Nuri";
        private const SOYISIMIKI    = "Kolay"; 
        
        
        protected $IsimUc            = "İsmail";
        protected const SOYISIMUC    = "Kolay"; 



    } 

    class Test extends Deneme{

    }
?>