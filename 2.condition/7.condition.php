<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Achieve the same, without the ELSE.</h1>
    
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
    /*if (isset($_GET['age'])){
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
    }*/
   // $age=$_GET['age']?? 'none' . ' ';
    //echo $age;
    //$genre=$_GET['genre']??'none';
    //echo $genre;
   // $name=$_GET['firstname']??' none';
    //echo $name;
    
    /*switch($age . $genre){
        
        case $age >=21 AND $age <= 40 AND $genre == 'women' :
            echo 'welcome to the team' . ' ' . $name;
        break;
        
        
        case $age >=21 AND $age >= 40 AND $genre == 'women' :
            echo "sorry you don't have criteria" . ' ' . $name;
        break;
        
        
        case $age <=21 AND $age <= 40 AND $genre == 'women';
            echo "sorry you don't have criteria" . ' ' . $name;
        break;
        
        
        case $age >=21 AND $age <= 40 AND $genre !== 'women';
            echo "sorry you don't have criteria" . ' ' . $name;
        break;
        
        
        default :
            
            echo 'enter your criteria';
        break;
    } */
    //if ($age >= 21 AND $age <=40 AND $genre == 'women');
    //echo 'welcome to the team' .' '. $name ;
    //$name =$_GET{'firstname'};
   
    if (isset($_GET['firstname'])){$name=$_GET['firstname'];} 
    $say='sorry you don\'t have criteria' ;
   
    if (isset($_GET['age'])){  //nous avons besoin de isset pour qu il reagrde si true false ainsi on n a pas d erreur avant d entre les donnée
        if($_GET['age'] >=21 AND  ($_GET['age']) <= 40 AND ($_GET['genre']) === 'women'){
            $say="welcome to the team" . " " . $name;
         } 
            echo $say;
        
       
    }
    
  
   ?>
</body>
</html>