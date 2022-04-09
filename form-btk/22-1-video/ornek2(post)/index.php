<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="sonuc.php" method="post">
        Adınız Soyadınız: <input type="text" name = "AdSoyad"> <br/>
        E-Mail adresiniz: <input type="mail" name = "EmailAdresi"><br/>
        Telefonunuz: <input type="text" name="Telefon"> <br/>
        <!--  form ile göndderilen veri value oluyor radio da -->
        Cinsiyetiniz: <input type="radio" name="Cinsiyet" value="Erkek"> Erkek
        <input type="radio" name="Cinsiyet" value="Kadin"> Kadın <br/> 
        Yaşınız: <select name="Yas" id="">
            <option value=""></option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
        </select>

        <input type="submit" value="Gönder">
    </form>

</body>
</html>