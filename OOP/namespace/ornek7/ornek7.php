<?php
    require_once("Siniflar/sukrukolay.php");
    require_once("Siniflar/nurikolay.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        use Uyeler\Sukru\Deneme as SK;
        use Uyeler\Nuri\Deneme as NK;

        $Bir    = new SK;
        echo $Bir->AdinNe()."<br/>";

        $Iki     = new NK;
        echo $Iki->AdinNe()."<br/>";



/*
        $Bir = new SukrununSiniflari\Deneme; // namespace'leri çağırma. SukrununSiniflari namespace'i içerisinde bulunan Deneme class'ı
        echo $Bir->AdinNe()."<br/>";

        $Bir = new NurininSiniflari\Deneme; // namespace'leri çağırma. NurininSiniflari namespace'i içerisinde bulunan Deneme class'ı
        echo $Bir->AdinNe()."<br/>";    
        
        $Bir = new MuhammedinSiniflari\Deneme; // namespace'leri çağırma. MuhammedinSiniflari namespace'i içerisinde bulunan Deneme class'ı
        echo $Bir->AdinNe()."<br/>";
*/      
    ?>
</body>
</html>