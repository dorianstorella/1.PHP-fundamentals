<?php 
$me  =array(
    'firstname' => 'dorian' ,
    'name' => 'storella',
    'season_pref' => 'summmer',
    'hobbies' => array(
        'walk' , 
        'code' , 
        'game' ,
        'tennis'
    )

);
$soulmate =array(
    'firstname' => 'soul',
    'name' => 'mate',
    'season_pref' => 'winter',
    'hobbies' => array(
        'foot',
        'game',
        'tennis',
        'manger'   
    )                                                    //POURQUOI INTERSECT NE FONCTIONN
);                                                       //  QUE AVEC HOBBIES JE PENSE QSUE C EST
                                                        // A CAUSE QU UN AUTRE ARRAY EST DECLAREE DANS UN AUTRE
                                                            // A VOIR
//array_intersct compare plusieur array CAMPARE VALEUR ONLY 
$result=array_intersect($me['hobbies'], $soulmate['hobbies']);
var_dump($result);

$result_merge =(array_merge($soulmate['hobbies'],$me['hobbies']));
var_dump($result_merge)
?>
