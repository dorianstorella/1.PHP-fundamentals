<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The Girl Soccer team</h1>
    
    <form method="get" action="">
    <label for="age">enter your age please</label>
    <input type="text" name="age">
    <br>
    <label for="genre">what's you gender?</label>
    
    <label for="male">male</label>
    <input type="radio" name="genre" value="male">
    
    <label for="women">women</label>
    <input type="radio" name="genre"  value="women">
    <br>
    <label for="name">enter you name</label>
    <input type="text" name="firstname">

    <input type="submit" name="submit" value="click">
    </form>
    

    <?php
    if (isset($_GET['age'])){
    $age=$_GET['age'];
    } else { 
        $age='';
    }
   //echo $age

   if (isset($_GET['genre'])){
       $genre=$_GET['genre']; 
    } else {
        $genre='';

   }
   if (isset($_GET['firstname'])){
       $name=$_GET['firstname'];
   } else {
       $name='';
   }
  

   if ( $age >= 21 AND $age <=40 AND $genre === 'women' ){
   echo 'welcome to the team' .' '. $name ;
   } else {
   echo "sorry you don't have criteria";
    }
   

    ?>
</body>
</html>