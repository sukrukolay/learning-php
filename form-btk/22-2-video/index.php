<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="sonuc.php" method = "get">
        Adınız Soyadınız: <input type="text" name="Isim"><br/>
        Hobileriniz: <br> 
        <input type="checkbox" name = "HobilerAlisveris" value="Alisveris">Alışveriş<br>
        <input type="checkbox" name = "HobilerSeyahat" value="Seyahat">Seyahat<br>
        <input type="checkbox" name = "HobilerSinema" value="Sinema">Sinema<br>
        <input type="checkbox" name = "HobilerTiyatro" value="Tiyatro">Tiyatro<br>
        <input type="checkbox" name = "HobilerYemek" value="Yemek">Yemek<br>
        <input type="submit" value = "Formu Gönder"> 
    </form> -->
    <form action="sonuc.php" method = "post">
        Adınız Soyadınız: <input type="text" name="Isim"><br/>
        Hobileriniz: <br> 
        <input type="checkbox" name = "Hobiler[]" value="Alisveris">Alışveriş<br> <!--name = "Hobiler[]" demek. Hobiler name ine sahip verileri diziye aktar demek-->
        <input type="checkbox" name = "Hobiler[]" value="Seyahat">Seyahat<br>
        <input type="checkbox" name = "Hobiler[]" value="Sinema">Sinema<br>
        <input type="checkbox" name = "Hobiler[]" value="Tiyatro">Tiyatro<br>
        <input type="checkbox" name = "Hobiler[]" value="Yemek">Yemek<br>
        <input type="checkbox" name = "Hobiler[]" value="Diğer">Diğer<br>
        <input type="submit" value = "Formu Gönder"> <!--submit de value değeri buton üzerinde yazan değeri belirtir.--> 
    </form>
</body>
</html>