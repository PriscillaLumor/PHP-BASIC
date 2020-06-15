<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $var1 = 12;
        $var2 = 4;

        if($var1 > 12 && $var2 < 5){
            echo "het getal zit tussen de 10 en de 5!";
        }else{
            echo "het getal is groter dan 10 of kleiner dan 5!";
        }
        
        $var1 = 4;
        $var2 = 4;

        if($var1 == 4 || $var2 == 4){
            echo "var1 en var2 zijn waar!";
        }else{
            echo "var1 en var2 zijn niet waar!";
        }

        $var1 = 6;
        $var2 = 13;

        if($var1 == 4 xor $var2 == 5){
            echo "Één van de twee waardes waar is maar niet beide!";
        }else{
            echo "Beide van de waardes is niet waar!";
        }

        $var1 = 5;
        $var2 = 4;

        if($var1 == 19 ! $var2 == 12){
            echo "De vergelijking is waar!";
        }else{
            echo "De vergelijking is niet waar!";
        }
    ?>

</body>
</html>