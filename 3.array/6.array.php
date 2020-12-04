

<?php 
$web_developments['frontend']=array();
$web_developments['backend']=array();


//$web_developments['frontend']= 'xhtml'  'gg';
array_push($web_developments['frontend'] , 'xhtml', 'html');
  

// affiche
echo '<pre>';
print_r($web_developments);
echo '</pre>'; 



$web_development= array(
    'frontend' => array(),
    'backend' => array(),
    );

    array_push($web_development['frontend'] , 'xhtml');
    array_push($web_development['backend'] , 'ruby on rail ');
    array_push($web_development['frontend'] , 'css');
    array_push($web_development['backend'] , 'flash');
                                         // ,0 , 2 veut dire supprime l element en 0 par deux 'case'
    array_splice($web_development['frontend'],0 ,1, array('html') );  //ici on remplace 
                                          // 0 se fait remplacer par 1 'case'
    unset($web_development['backend'][1]);
    
    
                                          //array_replace($web_development['frontend'] , )
    //affiche
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';

?>

<!--    css F
        flash                       -
        js
        xhtml replace by html
        remove flash                -
-->