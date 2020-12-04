<h1>"School sucks!" Exercise</h1>

<form action="" method="get">
<label for="note">Type your note </label>
<input type="text" id='note' name="note">
</form>


 
<?php 
if (isset($_GET['note'])){
    $note=$_GET['note'];
}else{
    $note='none';
}

if ($note <= 4 ){
    echo "This work is really bad. What a dumb kid!";
}
else if ($note >= 5 AND $note <= 9) {
    echo "This is not sufficient. More studying is required.";
}
else if ($note == 10) {
    echo "barely enough!";
}

else if ($note >= 11 AND $note <= 14){
    echo  "Not bad!" ;
}

else if ($note >= 14 AND $note <= 18 ){
    echo "Bravo, bravissimo!";
}

else if ($note == 19 OR $note == 20){
    echo "Too good to be true : confront the cheater!";
}

else if ($note > 20 ){
    echo "wrong number";
}
?>