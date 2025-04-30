<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders 2</title>
</head>
<body>
    <h2>Matematiksel İfadeler</h2>

    <!-- <h4>Toplam</h4> -->

<?php
    // $sayi1 = 5;
    // $sayi2 = 10;

    // $toplam = $sayi1+$sayi2;
    // echo "$sayi1 + $sayi2 = $toplam";

    // echo "<br><br><br> Atamalı Toplama İşlemleri";
    // $deger = 10;
    // $ekdeger = 59;
    // echo "<br> Sonuç : $deger + $ekdeger = ". $deger += $ekdeger;
    // echo "<br> $deger+10 = " . $deger+10;

    // echo "<br><br><br>";



    $guncelYil = 2025;
    $dogumTarihi = 2010;
    $yas = $guncelYil - $dogumTarihi;
    $yetersizYas = 18 - $yas;

    echo "<h4>Ehliyet Yaş Hesaplama</h4><br>";

    if ($yas >= 18) {
        echo "$yas yasındasınız araba ehliyeti alabilirsiniz";
    }   
    else {
       echo "$yas ındasınız araba ehliyeti alamazsınzız $yetersizYas yıl beklemeniz lazım";
    }



    echo"<br><br><br>";

    $sayi1 = 50;
    $sayi2 = 10;
    $sonuc = $sayi1 % $sayi2;
    echo"<br> $sonuc";
    echo"<br> İşlemin Sonucu : $sayi1 % $sayi2 = $sonuc";

    $sayi = 6;
    $sonuc = $sayi--;
    $sonuc = $sayi--;
    $sonuc = $sayi--;
    echo $sonuc;

    echo "<br>";
    $sayi = 6;
    $sonuc = --$sayi;
    $sonuc = --$sayi;
    $sonuc = --$sayi;
    echo $sonuc;
    

?>

    
</body>
</html>