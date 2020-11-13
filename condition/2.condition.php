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
    date_default_timezone_set('europe/paris');
    $heure=date('H:i');       // $date = date('d-m-y h:i:s');  <== gauche date    droite heure
                                    //c est la function date()              src = https://www.tutorialrepublic.com/faq/how-to-get-the-current-date-and-time-in-php.php#:~:text=Answer%3A%20Use%20the%20PHP%20date%20%28%29%20Function%20You,following%20example%20to%20see%20how%20it%20basically%20works%3A
    echo $heure ;                 //pour appeler une function

    if($heure <= 9 AND $heure>= 5){         
    echo 'good morning!';
}
    elseif($heure > 9 AND $heure <= 12){
    echo 'good day ';
}
    elseif ($heure > 12 AND $heure <= 16){
    echo 'good afternoon';
}
    elseif ($heure > 16 AND $heure >= 21){
    echo 'good evening';
}
    elseif ($heure > 21 ){
    echo 'good night';
}
    elseif ($heure <= 4.59){
    echo 'good night';
}    ?>    
</body>
</html>