<?php

/**
r : Salt okunur dosyaları açmak için bu parametre kullanılır.

w: Yalnızca yazılması için bir dosya açar. Dosyanın içeriğini siler. Kullanırken dikkatli olmak gerekli

a: Yalnızca yazmak için bir dosya açar fakat w komutunun aksine dosyadaki verileri korur.

x: Yalnızca yazmak için yeni bir dosya oluşturur.

r+ : Okuma/Yazma için bir dosya açar.

w+: Okuma/ yazma için bir dosya açar. Dosyanın içeriğini siler

a+: Okuma/Yazma için bir dosya açar. Dosya içeriği korunur.

x+ : Okuma/Yazma için bir dosya oluşturur. Dosya varsa false değeri ya da bir hata döndürür


fGetFonksiyonu (Tek satır okuma):
fGet() fonksiyonu belirttiğimiz dosyanın ilk satırını okumak için kullanılır. Bazı doğruluk ve dosya kontrollerinde kullanabiliriz
 */
$myFile = fopen("b.txt","r"); // fopen("dosya_ismi","modu")--- b.txt isimli dosyayı okuma modunda açtım.
echo fread($myFile,filesize("b.txt")); // fread(açtığım dosyayı atadığım değişken, filesize("b.txt"));
// fopen ile açılan dosyayı fread ile dosyanın uzunluğu kadar okuyup dosyayı ekrana yazdır.
fclose($myFile); // dosyayı kapat.

echo "<br>";
$dosya = fopen("c.txt","w"); //c.txt isimli bir dosya oluşturup yazma modunda açtı
echo fwrite($dosya,"acilan dosyaya metin eklendi..."); // fwrite ile açılan dosyaya metni ekledi.
fclose($dosya);


?>