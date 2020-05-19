<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $score = 20;

        switch($score) {
            case 20:
            echo "Wow wat een fantastische score!";
            break;
            case 19:
            echo "Wow bijna alle punten nog 1 te gaan!";
            break;
            case 17:
            echo "Goed bezig, bijna alle punten!";
            break;
            case 15:
            echo "Ga zo door!";
            break;
            default:
            echo "Nog even oefenen dan haal je vast alle punten!";
        }
    ?>

</body>
</html>