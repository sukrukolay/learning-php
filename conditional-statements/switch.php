<?php

$age = 22 ; 

switch($age) 
{
    case "10":  // $age degeri 10 ise cocuk yazdir.
    {
        echo "cocuk";
        break; //break komutu yazılmazsa ilk sağladığı şartın altındaki case lere de girer ve onları da yazdırır.
    }
    case "22":  // $age degeri 22 ise genc yazdir.
    {
        echo "genc";
        break;
    }
    case "60": // $age degeri 60 ise yasli yazdir.
    {
        echo "yasli";
        break;
    }
    default:
    { 
        echo "gecersiz yas";  // $age degeri 10-22-60 degerlerinden birisi degil ise gecersiz yas yazdir.
        break;
    }
}
?>