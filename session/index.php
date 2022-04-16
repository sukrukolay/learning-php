<?php
    session_start();    // session_start() fonksiyonunu en üst satırda tanımlamak lazım başka türlü çalışmaz.
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

        // kaç adet cookie oluşturulduysa tarayıcıda o kadar cookie oluşur
           /*
           setcookie("KullaniciAdi","Şükrü");
           setcookie("KullaniciSoyadi","Kolay");
           setcookie("KullaniciEmail","deneme@gmail.com");
           setcookie("KullaniciSehir","Konya");
            */

        /*
         session_start()      : session(oturum) başlatmak veya sessionları takip etmek için kullanılır.
         session_destroy()    : Daha önceden oluşturulmuş olan sessionları silmek için kullanılır.
        */

        // sessionları ekrana yazdırır.
            /*
            foreach($_SESSION as $iter)
               {
                   echo $iter ." <br/>";
               }
           echo $_SESSION["KullaniciAdi"];  // tek tek okumak için bu yöntem kullanılır.
           
            */

           // sessionlar tarayıcı kapandığı anda yok olurlar.
           /*
            sessionlar tarayıcıda tek bir çerez gibi tanımlanır yani 4 tane session yazmama rağmen 1 tane gözükecektir.
            xampp içerisinde bulunan tmp klasörünün içine girip sessionların içeriklerini görebiliriz.
           */
            $_SESSION["KullaniciAdi"]      = "Şükrü";
            $_SESSION["KullaniciSoyadi"]   = "Kolay";
            $_SESSION["KullaniciEmail"]    = "deneme@gmail.com";
            $_SESSION["KullaniciSehir"]    = "Konya";
            
        ?>
   <a href="oku.php">Sessionları Okumak İçin Buraya Tıkla</a>
</body>
</html>
