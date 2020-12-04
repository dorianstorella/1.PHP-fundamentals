<?php




//null safe operator

//php 7
$country =  null;

if ($session !== null) {
  $user = $session->user;

  if ($user !== null) {
    $address = $user->getAddress();
 
    if ($address !== null) {
      $country = $address->country;
    }
  }
}

$address = $user->getaddress();
$country = $address ? $address->getcountry() : null;

//php 8 
$country = $user -> getaddress() ? -> getcountry();




//comparaison chaine de caractere

//php 7 : strpos
$contient = strpos('chaine de caractere' , 'caractere') != false; 

//php 8  str_contains    str_start_whith        str_ends_with

//str_contains
$contient = str_contains('chaine de caractere' ,'chaine');  //true

// str_start_with
$debut = str_start_whith('chaine de caractere', 'chaine');  ///true

// str_ends_whith
$fin = str_ends_with('chaine de caractere' , 'chaine'); //false




//promotion des propriété

class User {
    public string $email;
    public string $nom;

    public function __construct(string $email, string $nom) 
    {
        $this->email = $email;
        $this->nom = $nom;
    }
}

//php8

class User {
    public function __construct(
        public string $email,
        public string $nom
    )
}



//argument nommés

function exemple(int $a, ? int $b = null, ?string $c = null, ?int $d = null)

//PHP7 
exemple (2,null,null, 150);

//PHP8
exemple ( a:2 , d:150);



//PHP8 type union 
 
public function exemple( array|string $valeur): int|float;


// virgule finale
//php7
function exemple(
    int $a,
    string $b     
)
//php8 
function exemple(
    int $a,
    string $b, 
)


//php 7 

switch (8.0) {
    case '8.0':
      $result = "Oh no!";
      break;
    case 8.0:
      $result = "This is what I expected";
      break;
  }
  echo $result;
  //> Oh no!

  //php8 match
  echo match(8.0) {
    '8.0' => "Oh no!",
    8.0 => "This is what I expected",
  }
  {};
  //> This is what I expected

   
  //php 8 comment  
  
  #JE SUIS UN COMMENTAIRE

?>
