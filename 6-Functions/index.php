<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $woordje = "Hallo";
        $zinnetje = "mooie blauwe planeet!";
        $heleZin = "Hallo mooie blauwe planeet!";

        function zetTweeWoordenAanElkaar(){
            return $woordje + $zinnetje;
        
        }

        echo $heleZin;
        zetTweeWoordenAanElkaar();

    ?>

</body>
</html>