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
     move_uploaded_file();  
     // dosya yükleme işlemlerinde kullanılır.
     // herhangi bir dosyayı belirilecek olan dizine yüklemek için kullanılır.
     */
    ?>

    <!--dosya yüklemek için post method u kullanılır-->
    <!-- enctype = "multipart/form-data" formlardan dosya yüklememize izin verir. -->
    <form action="sonuc.php" method ="post" enctype = "multipart/form-data"> 
        Yüklenecek Olan Dosya: <input type="file" name="Dosya"> <br>
        <input type="submit" value="Dosyayı yükle">
    </form>
</body>
</html>