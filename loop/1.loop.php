<?php 
$names= array('john ', 'jeanne ', 'joan ','emile');
foreach ($names as $name){
    //echo ucfirst($name); //ucfirst make the first letter  in uppercase
                            //       fait la premiere lettre en  maj
    //echo strtoupper($name);      // met en maj      
   //echo ucwords($name); //met chaque premiere lettre en maj
                            // make every first lette in uppercase
}



$pronouns = array ('i' , 'you' , 'he/she' , 'we' , 'you' ,'they');
//var_dump($pronouns);
foreach ($pronouns as $key => $value){      //same idem  //     foreach ($pronouns as pronoun){                       
        $pronouns[$key] = ucfirst($value);               //     echo ucfirst($pronoun . ' '.'code'. '<br/>' );
    echo ucfirst($value . ' '.'code'. '<br/>' );         //         }
}

   
        
  
    
   




//echo '<pre>';
//print_r ($plates);
//echo '</pre>';
?>