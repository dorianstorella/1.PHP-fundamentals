<h1>10. Ternary operators</h1>



<form action="" method="get">
<label for="genre">choose your genre :</label>

<label for="man">man</label>
<input type="radio" name="genre" value="man">

<label for="women">women</label>
<input type="radio" name="genre" value="women">

<label for="other">other</label>
<input type="radio" name="genre" value="other">

<input type="submit" name="submit" value="click">
</form>


<?php

//$say="";
if (isset($_GET['genre'])){
    $genre=$_GET['genre'];
        if ($genre == 'women'){
        $say='hello women';
        echo $say;
        }
        else if ($genre == 'man'){
            $say='hello man';
            echo $say;
        }
        else {
            $say='hello my friend';
            echo $say;
        }
}



?>