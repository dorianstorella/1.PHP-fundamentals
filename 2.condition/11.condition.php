<h1>Ternary operators</h1>

<form action="" method="get">
<label for="genre">choose your genre :</label>

<label for="man">man</label>
<input type="radio" name="genre" value="man">

<label for="women">women</label>
<input type="radio" name="genre" value="women">

<input type="submit" name="submit" value="click">
</form>
<?php 

$heyM = "hello man";
$heyF = "hello girl";
$genre = 'girl';  
if (isset($_GET['genre'])){
    $genre=$_GET['genre'];
$is_adult = ($genre == 'man') ? $heyM : $heyF ;
echo $is_adult;
}
/*if ($genre == 'man')
{
    echo 'hello';
    
}else{
    $is_adult = false;
}*/
?>