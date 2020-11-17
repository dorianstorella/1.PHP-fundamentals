<h1>exercice 2</h1>

<?php 
//voici differente facon
//d afficher une array
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' );   //afiche l array en ligne
print_r($countries); 

echo '<pre>';                               //affiche l array ligne par ligne
print_r($countries);                           
echo '</pre>';

var_dump($countries);      // var_dump affiche les information de la variable

$results = print_r($countries, true);
 // $results contient l'affichage de print_r
echo $results;

//rajouter des element dans une array

//long way 
array_push($countries, 'England');
var_dump($countries);

//short way
$countries[] = 'Scotland';
var_dump($countries);

// donner une clef qui associera celle si au valeur 
$person['me'] =  'junior web developer'; 
var_dump($person);

//  quand on nomme les clef  
//faire lien avec sa valeur
$person['rue'] = '24 street dumont';
$person['nom'] = 'lupin';
$person['prenom'] = 'marcel';

$me  =array(
    'prenom' => 'dorian' ,
    'nom' => 'storella',
    'saison_preferee' => 'été', //wether //summer
    'aime_foot' => 'oui',
);
    echo '<pre>';
    print_r($me);
    echo '</pre>';


?>

