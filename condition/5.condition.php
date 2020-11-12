<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Display a different greeting according to the user's age, gender and mothertongue.</h1>



    <form method="get" action="">
	<label for="age">please type your age :</label>    
    <input type="text" name="age">      <!--ici on recup avec GET -->
	<br>

    <label for="lang">do you speak english :</label>
    <label for="yes">yes</label>
    <input type="radio" id="yLang" name="lang" value="yes">
    <label for="no">no</label>
    <input type="radio" id="nLang" name="lang" value="no">
    
    <br>
    <label for="man">man</label>
	<input type='radio' id="man" name='genre' value="man">
    
    <label for="women">women</label>
	<input type='radio' id="women" name='genre' value="women">

    <input type="submit" name="submit" value="Greet me now">
</form>


<?php                               //17 ligne ici on prevoit de prendre lage avec 
    if (isset($_GET['age'])){      //isset determine si un var est declaree et est differente de NULL           | // src utile https://stackoverflow.com/questions/12126420/isset-php-isset-getsomething-getsomething
        $age=$_GET['age'];   // ici il prend l age                                                              | https://www.php.net/manual/fr/function.isset.php  
    }else{
        $age='';            //ici si jamais il n y a pas encore de valeur
    }
    
    if (isset($_GET['genre'])){
        $genre=$_GET['genre'];
    }else{
        $genre='';
    }
    
    if (isset($_GET['lang'])){
        $lang=$_GET['lang'];
    }else{ 
        $lang=''; 
    }


    if ($age <= 12 and $age > 0  AND $genre === 'women' AND $lang === 'yes')
    echo "hello miss kid00Ooo";
    
    if ($age <=12 AND $age > 0 AND $genre ==='man' AND $lang === 'yes')
    echo "hello mister kid00Ooo";
    
    if ($age <= 12 and $age > 0  AND $genre === 'women' AND $lang === 'no')
    echo "alloa miss kid00Ooo";
    
    if ($age <=12 AND $age > 0 AND $genre ==='man' AND $lang === 'no')
    echo "alloa mister kid00Ooo";
    
    
    
    if ($age > 12 AND $age < 18 AND $genre === 'women'AND $lang === 'yes')
    echo"hello miss teen";

    if ($age > 12 AND $age < 18 AND $genre ==='man'AND $lang === 'yes')
    echo"hello mister teen";

    if ($age > 12 AND $age < 18 AND $genre === 'women'AND $lang === 'no')
    echo"alloa miss teen";

    if ($age > 12 AND $age < 18 AND $genre ==='man'AND $lang === 'no')
    echo"alloa mister teen";
   
   
   
    if ($age >= 18 AND $age <115  AND $genre === 'women' AND $lang === 'yes')
    echo'hello miss adult';

    if ($age >= 18 AND $age <115  AND $genre === 'man' AND $lang === 'yes')
    echo'hello mister adult';

    if ($age >= 18 AND $age <115  AND $genre === 'women' AND $lang === 'no')
    echo'aloha miss adult';

    if ($age >= 18 AND $age <115  AND $genre === 'man' AND $lang === 'no')
    echo'aloha mister adult';
    
    
    if($age > 115)
    echo "still alive ?";
    ?>
</body>
</html>
