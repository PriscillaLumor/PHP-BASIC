<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $test1 = 3;
        $test2 = 6;
        if($test1 == $test2){
            echo "Test1 en Test2 is gelijk <br>";
        }else {
            echo "Test1 en Test2 is ongelijk <br>";
        }
        if($test1 === $test2){
            echo "Test1 en Test2 is identiek <br>";
        }else {
            echo "Test1 en Test2 is niet identiek <br>";
        }
        if($test1 > $test2){
            echo "Test1 is groter dan test2 <br>";
        }else {
            echo "Test1 is kliener dan test2 <br>";
        }
        if($test1 >= $test2){
            echo "Test1 is groter of gelijk aan test2 <br>";
        }else {
            echo "Test1 is kleiner of gelijk aan test2 <br>";
        }
    ?>

</body>
</html>