<?php
/*
    PDO::getAvailableDrivers()   : PHP yazılımı içerisinde sisteme tanımlı olan ve kullanılabilir PDO sürücüleri listesini bulur ve bulduğu değerlerden
yeni bir dizi oluşturarak oluşturduğu değeri geriye döndürür. 

*/

    $Degerler = PDO::getAvailableDrivers();  

    echo "<pre>";
        print_r($Degerler); 
    echo "</pre>";
?>