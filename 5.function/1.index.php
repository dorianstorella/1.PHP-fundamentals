<h1>function</h1>
<?php
$name =["maurice" , "alice" , "Jesus" , "judas" ];
function say_hello($name){
foreach ($name as $names){
echo ("hello " . " " . $names . " <hr>")  ;
}
}
say_hello($name);
array_push($name , "mary");
say_hello($name);
?>