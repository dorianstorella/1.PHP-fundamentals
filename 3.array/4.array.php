<?php 
$me  =array(
    'prenom' => 'dorian' ,
    'nom' => 'storella',
    'saison_preferee' => 'été', //season //summer
    'aime_foot' => 'oui',
    'hobbies' => array(
        'walk' , 
        'code' , 
        'game' ,
        )

);

$mother = array(
    'firstname'=>'Isabelle',
    'name'=>'storella',
    'favourite_season'=> 'spring', // <= printemps && autonne => autumn
    'hobbies' => array(              // imbrique une array dans une autre
        '1 hobbies'=>'manucure',
        '2 hobbies'=>'restaurant' , 
        '3 hobbies'=>'game' 
        )
);
    echo '<pre>';
    print_r(count($mother));
    echo '</pre>';
    
    var_dump(count($mother));   // function count compte combien  il y a de valeur 

    echo(count($mother['hobbies']));   

$count_mother=(count($mother['hobbies']));
$count_me=(count($me['hobbies']));
echo '<pre>';
print_r($count_me + $count_mother);
echo '</pre>';
// au dessu nous additionons les var 
//en dessou nous additionnons et ensuit et met le result dans une var
$count=(count($mother['hobbies']))+(count($me['hobbies']));

echo '<pre>';
print_r($count);
echo '</pre>';

array_push($me['hobbies'] , 'taxi'); 
//en dessou ne pas oublies de rajouter des crochet d array pour dire que c est un nouvelle valeur
$me['hobbies'][]='taxidermy';
var_dump ($me);
//ici sans les crochet toute les valeur son remplacee par la nouvelle
//exemple
$me['hobbies']='taxidermy';
$me['nom']='durand';
var_dump ($me);

$mother['hobbies']['4 hobbies']='surf';
var_dump($mother['hobbies']['4 hobbies']);
var_dump($mother)
?>