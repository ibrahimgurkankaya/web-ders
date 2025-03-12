<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders 2</title>
</head>
<body>
    <?php
        // ceil : Herhangi bir ondalıklı sayıyı yukarı yuvarlamak icin kullanılır.
        // floor : Herhangi bir ondalıklı sayıyı aşağıya yuvarlamak icin kullanılır.
        // round : Herhangi bir ondalıklı sayıyı en yakına yuvarlamak icin kullanılır.

        $sayi1=14.5;
        echo"Sonuc : ".ceil($sayi1);
        echo "<br>";

        $sayi1=44.6;
        echo"Sonuc : ".floor($sayi1);
        echo "<br>";

        $sayi1=10.2;
        echo"Sonuc : ".round($sayi1);
        echo "<br>";
        echo "<br>";

        echo "İlk 2 haneyi sabit tutarak 3. haneye gore yuvarlama";
        echo "<br>";
        $sayi1 = 10.264;
        echo "sayi1 değişkeninin değeri $sayi1 Round işlemi sonunda sonuç :".round($sayi1,1);
    ?>
</body>
</html>