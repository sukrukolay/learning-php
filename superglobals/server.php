<?php

    /*O anda işletilen sayfanın doküman dizinine göre relative yolunu barındırır. 
    Örneğin http://www.birsite.com/sayfalar/x.php adresinden çalıştırılan bir sayfada $_SERVER[‘PHP_SELF’] değeri /sayfalar/x.php olacaktır. Tam dosya adını __FILE__ sabiti barındırır. */
    echo "PHP SELF: " .$_SERVER["PHP_SELF"]; // çalışmakta olan php dosyasının yol tanımlamasını verir.
    echo "<br>";
    echo "HOST: ".$_SERVER['HTTP_HOST']; // PHP sayfasının hosting bilgilerini verir.
    echo "<br>";
    echo "SERVER NAME: ".$_SERVER['SERVER_NAME']; //PHP sayfasının çalıştığı sunucunun adını verir.
    echo "<br>";
    echo "SERVER SOFTWARE: ".$_SERVER['SERVER_SOFTWARE']; //PHP sayfasının çalıştığı sunucu yazılımlarını gösterir.
    echo "<br>";
    echo "REMOTE ADDRESS: ".$_SERVER['REMOTE_ADDR']; //Aktif PHP sayfasını görüntüleyen kullanıcının IP adresini verir.
    echo "<br>";
    echo "SCRIPT FILE NAME: ".$_SERVER['SCRIPT_FILENAME']; //Çalışmakta olan PHP dosyasının tam yol tanımlamasını verir.
    echo "<br>";
    echo "REQUEST URL: ".$_SERVER['REQUEST_URI']; //Çalışmakta olan PHP dosyasının URI değerini verir.
    echo "<br>";
    echo "REQUEST METHOD: ".$_SERVER["REQUEST_METHOD"] //PHP sayfasına erişim için kullanılan yöntemi verir (get, post gibi)
?>