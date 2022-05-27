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
    
        $Sorgu    = $VeriTabaniBaglantisi->query("SELECT *FROM kayitlar", PDO::FETCH_ASSOC);
            if($Sorgu){
                $Sayi   = $Sorgu->rowCount();
                    if($Sayi>0){
                        foreach($Sorgu as $Kayitlar){
                            echo $Kayitlar["id"]." | ". $Kayitlar["adisoyadi"]." | ". $Kayitlar["yas"]." | ". $Kayitlar["sehir"]." | ". $Kayitlar["siteyegirissayisi"]." | ". $Kayitlar["siparissayisi"]." | ". $Kayitlar["siparistoplamtutarlari"]." <a = href ='sil.php?ID=".$Kayitlar["id"]."   '>  SIL </a> <br/> ";
                        }
                    }else{
                        echo "Kayıt Yok.<br/>";
                    }
            }else{
                echo "Sorgu Hatası.<br/>";
            }


        $VeriTabaniBaglantisi   = null;
    ?>
</body>
</html>