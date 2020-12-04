<h1>function</h1>
<?php
$name =["maurice" , "alice" , "Jesus" , "judas" ];
function say_hello($name){
    foreach ($name as $names){
echo ("hello " . " " . $names . " <hr>");
    }
}
say_hello($name);
array_push($name , "mary");
print_r($name[4]);
say_hello($name);
?>
<?php 
function bonjour($name){
    echo "hello" . " " . $name;
}
bonjour(5 . "dorian" ." ". "sto")

function make_orange_juice($oranges){
	// do things to $input, for example : capitalize it
	$juice = squash($oranges);
	//then return it to get it out of the factory
	return $juice;
}
make_orange_juice(10);

?>