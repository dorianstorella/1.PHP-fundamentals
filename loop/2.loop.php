
<h2>while</h2>
<?php
$amount_of_lines = 0;

while ($amount_of_lines >= -10) 
{
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines --;      //  avec while on incremente a la fin 

}


?>
<h2>for</h2>
<?php
for ($amount_of_lines = 0; $amount_of_lines <= 10; $amount_of_lines ++)
{
    echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP. <br>';
}
?>
<br>
<h2>exer</h2>
<br>
<?php
$nbr =1;
while ($nbr <=120){

    echo ($nbr . ' - ');
    $nbr ++; 
}
$br = 0;
while ($br <= 5){
    echo  '<br>';
    $br ++;
}



for ($nbr=1 ; $nbr <= 120 ; $nbr ++){
    print_r($nbr . ' - ');
}

$startup['firstname']= array(
    1 =>'jean', 
        'philipe' , 
        'manon' , 
        'champaign'
);

echo '<pre>';
print_r($startup);
echo '</pre>';
foreach ($startup['firstname'] as $key => $value){ // pourchaque startup avec clef
    $startup['firstname'][$key];
echo ucfirst($value . ' ');
}
?>
<?php
$country=array(
    'BE' => 'belgique', 
    'AT' => 'austria',
    'FI' => 'finland',
    'FR' => 'france',
    'Dk' => 'denmark',
    'GR' => 'greece',
    'IC' => 'iceland',
    'TH' => 'thailand',         
    )

?>
<form class="get">
<select>
<?php 
foreach ($country as $countries){
    echo "<option>$countries</option>";
}
?>
</select>
</form>

<form class='get'>
<select>

<?php
foreach ($country as $key => $value) {
    $country[$key] = $value;
    echo "<option value=`$key`>$value</option>";
}
?>
</select>
</form>
