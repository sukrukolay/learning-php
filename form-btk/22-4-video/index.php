<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sonuc.php" method ="post" enctype="multipart/form-data"  >
    <!-- multiple yazılması çok dosyayı seçmemizi sağlar -->
        Dosyalar: <input type="file" name="Dosyalar[]" multiple ><br> 
        <input type="submit" value="Dosyaları Yükle">
    </form>
</body>
</html>