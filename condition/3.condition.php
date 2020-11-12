<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Display a different greeting according to the user's age.</h1>
   
    <form method="get" action="">
	<label for="ag">please type your age :</label>
	<input type="text" name="age">      <!--ici on recup avec GET -->
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php                               //17 ligne ici on prevoit de prendre lage avec 
    if (isset($_GET['age'])){      //isset determine si un var est declaree et est differente de NULL           | // src utile https://stackoverflow.com/questions/12126420/isset-php-isset-getsomething-getsomething
        $age=$_GET['age'];   // ici il prend l age                                                              | https://www.php.net/manual/fr/function.isset.php  
    }else{
        $age='';            //ici si jamais il n y a pas encore de valeur
    }

    if ($age === NULL )
    echo " ";
    
    if ($age <= 12 and $age > 0 )
    echo "hello kid00Ooo";

    if ($age > 12 AND $age < 18)
    echo"hello teen";

    if ($age >= 18 AND $age <115)
    echo'adult';

    if($age > 115)
    echo "still alive ?";
    ?>
</body>
</html>