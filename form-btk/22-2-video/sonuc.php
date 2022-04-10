<?php

// bu şekilde tek tek seçmek doğru sonucu verse de yanlış bir teknik olacaktır.
/*
    $GelenAdiSoyadi     = @$_GET["Isim"];
    $GelenHobiAlisveris = @$_GET["HobilerAlisveris"];
    $GelenHobiSeyahat   = @$_GET["HobilerSeyahat"];
    $GelenHobiSinema    = @$_GET["HobilerSinema"];
    $GelenHobiTiyatro   = @$_GET["HobilerTiyatro"];
    $GelenHobiYemek     = @$_GET["HobilerYemek"];

    echo "Adınız Soyadınız : " .$GelenAdiSoyadi .        "<br/>";
    echo "Hobileriniz : <br/>" .$GelenHobiAlisveris .    "<br/>";
    echo $GelenHobiSeyahat .      "<br/>";
    echo $GelenHobiSinema .       "<br/>";
    echo $GelenHobiTiyatro .      "<br/>";
    echo $GelenHobiYemek .        "<br/>";

*/

    $GelenAdiSoyadi = $_POST["Isim"]; 
    $GelenHobiler   = $_POST["Hobiler"];
    echo "Adınız Soyadınız: ".$GelenAdiSoyadi . "<br/>" ;
    echo "Hobileriniz: <br>";
    foreach($GelenHobiler as $Bilgiler) 
    {
        if(empty($GelenHobiler))
            break;
        echo $Bilgiler;
        echo "<br>";
    } 
    
?>