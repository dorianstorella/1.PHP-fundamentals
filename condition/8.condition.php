<h1>"School sucks!" Exercise</h1>

<form action="" method="get">
<label for="note">Type your note </label>
<input type="text" id='note' name="note">
</form>


 
<?php 
if (isset($_GET['note'])){
    $note=$_GET['note'];
}else{
    $note='';
}
//echo $note;

switch ($note)  {
    case $note <= 4 :
        echo "This work is really bad. What a dumb kid!";
break; 

    case $note >= 5 AND $note <= 9:
        echo  "This is not sufficient. More studying is required.";
break;
    
    case $note == 10 :
        echo "barely enough!";
break;

    case $note >= 11 AND $note <= 14:
        echo  "Not bad!" ;
break;

    case $note >= 14 AND $note <= 18 :
        echo "Bravo, bravissimo!";
break;

    case $note == 19 OR $note == 20:
        echo "Too good to be true : confront the cheater!";
break;

    case $note > 20 :
        echo "wrong number";
break;

}

    
    
    
    
    /*note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : 
note equals 10 : 
note is 11, 12, 13 or 14 : "
note is 15, 16, 17 or 18 : 
note is 19 or 20 : */
?>