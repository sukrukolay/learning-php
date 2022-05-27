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
        try{
            $VeriTabaniBaglantisi   = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
        }catch(PDOException $Hata){
            echo "Bağlantı Hatası<br/>";
            echo "Hata Açıklaması : ".$Hata->getMessage();
            die();
        }

        $GelenID    = $_GET["ID"];
    
        $Sil    = $VeriTabaniBaglantisi->query("DELETE FROM kayitlar WHERE id=".$GelenID);
            if($Sil){
                header("Location:index.php");
                exit();
            }else{
                echo "Sorgu Hatası.<br/>";
            }


        $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>