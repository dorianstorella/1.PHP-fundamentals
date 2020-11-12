<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRILL Condition</title>
</head>
<body>
<?php $room_is_filthy = false;

if( $room_is_filthy === true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>
<br>
<?php
$possible_states = array(
    0 => "dnager pour la sante",
    1 => "tres sale",
    2 => "sale",
    3 =>  "propre",
    4 => "immaculee", 
);
$room_filthiness = $possible_states[2]; 
 
if( $room_filthiness == $possible_states [0] || $room_filthiness == $possible_states[1]){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness == $possible_states[2] ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>
</body>
</html>