<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.condition</title>
</head>
<body>
    <h1>2.Display a different greeting message depending on the time of the day.</h1>

    <?php
    $heure=4.59; 
    if($heure <= 9 AND $heure>= 5) {
    echo 'good morning!';
}
    if($heure > 9 AND $heure <= 12)
    echo 'good day ';

    if ($heure > 12 AND $heure <= 16)
    echo 'good afternoon';

    if ($heure > 16 AND $heure >= 21)
    echo 'good evening';

    if ($heure > 21 )
    echo 'good night';

    if ($heure <= 4.59)
    echo 'good night';
    ?>    
</body>
</html>