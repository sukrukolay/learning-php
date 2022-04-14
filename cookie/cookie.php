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
    
        /*
        setcookie()  :  Belirtilecek olan değerler doğrultusunda cookie oluşturmak veya silmek için kullanılır.
        Parametreler :  1. parametre:çerez adı , 2. parametre:çerez değeri , 3. parametre:çerez yaşam süreci 
        */

        /* cookie bir kere oluşturulduğunda tarayıcıda depolanır. Yani setcookie leri tarayıcıda çalıştırdıktan sonra silersek bile sonradan 
        erişebiliriz.
        */

        $CookieYasamSuresi = time() + 60*60; //time()+saniye cinsinden girilen zaman. Yani 1 saat lik yaşam süresi
        $CookieYasamSuresi2 = time() + 60*10; //1dk lık yaşam süresi
        setcookie("KullaniciAdi","Şükrü"); // cookie ye yaşam süresi tanımlamadığım için tarayıcı kapatılınca bu cookie yok olacak.  
        setcookie("KullaniciSoyadi","Kolay",$CookieYasamSuresi); // cookie 1 saat sonra otomatik olarak silinecektir.
        setcookie("YasadigiSehir","Konya",$CookieYasamSuresi2); // cookie 10 dk sonra otomatik olarak silinecektir.
        // print_r($_COOKIE); // dizi şeklinde yazdırmak için
        echo "Kullanıcının Adı: " .$_COOKIE["KullaniciAdi"] . "<br/>";
        echo "Kullanıcının SoyAdı: " .$_COOKIE["KullaniciSoyadi"] . "<br/>";
        echo "Kullanıcının Yaşadığı Şehir: " .$_COOKIE["YasadigiSehir"] . "<br/>";
    ?>
</body>
</html>