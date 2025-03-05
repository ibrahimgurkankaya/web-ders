<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dersleri 2</title>
</head>
<body>
    <h3>Sık Kullanılan Hazır Fonksiyonlar</h3>

<?php
    echo $metin = "Aydın Adnan Menderes Üniversitesi";
    $byazi = strtoupper($metin); // yazıyı buyuk hale donusturur
    $kyazi = strtolower($metin); // yazıyı kucuk hale donusturur
    $mb_byazi = mb_strtoupper($kyazi); // yazıyı buyuk hale donusturur
    $mb_kyazi = mb_strtoupper($mb_byazi); // yazıyı kucuk hale donusturur
    $ilkharf_buyuk_metin = ucfirst($mb_kyazi); // Gelen metnin ilk harfini buyuk yazar
    $ilkharf_buyuk_kelime = ucwords($mb_kyazi); // Gelen kelimenin ilk harflerini buyuk yazar

    echo "<br>";
    echo "Karakter Sayısı :".strlen($metin);
    echo "<br>";
    echo "Metnin belirli bir karakter sayısı : ".substr($metin,0,6);


?>


    
</body>
</html>