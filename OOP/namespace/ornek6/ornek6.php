

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


        require_once("Siniflar/sukrukolay.php");
        require_once("Siniflar/nurikolay.php");
        require_once("Siniflar/muhammedsirin.php");


        $Bir    = new Uyeler\Sukru\Deneme;
        echo $Bir->AdinNe()."<br/>";

        $Iki    = new Odemeler\Sukru\Test;
        echo $Iki->Rakam."<br/> <br/>";


        $Uc     = new Uyeler\Nuri\Deneme;
        echo $Uc->AdinNe()."<br/>";

        $Dort   = new Odemeler\Nuri\Test;
        echo $Dort->Rakam."<br/> <br/>";


        $Bes    = new Uyeler\Muhammed\Islemler\Kaydet\Deneme;
        echo $Bes->AdinNe()."<br/>";

        $Alti    = new Odemeler\Muhammed\Test;
        echo $Alti->Rakam."<br/>";

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