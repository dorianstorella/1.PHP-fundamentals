
<h1>ex 3 array</h1>

<?php
$me  =array(
    'prenom' => 'dorian' ,
    'nom' => 'storella',
    'saison_preferee' => 'été', //season //summer
    'aime_foot' => 'oui',
    //'hobbies' => array('walk' , 'code' , 'game' )

);

$me ['hobbies']=array(
    '5' => 'walk' , 
    '3' => 'code' , 
    '1' => 'game' ,
);
    echo '<pre>';
    print_r($me);
    echo '</pre>';

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
    print_r($mother);
    echo '</pre>';

    echo'<pre>';
    print_r($mother['hobbies']); // simplement pour acceder a l arrazy

?>