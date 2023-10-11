<?php
require_once("function.php");
//var_dump($_POST);
$name=$_POST['nom'];
$password=$_POST['password'];
if($_POST){

if(empty($name and $password)){
    
    echo"<br> veuillez inserer votre nom ou votre mot de passe svp";
   
}
 elseif( strlen($password)<6 or strlen($password)>10){// permet d arreter le code lorsque le mot de passe <6 ou >10
    echo" fatal error veuillez inserer un mot de passe de 10 caracteres max ou 6 caracteres  min";
}
else{


/*$passwordLengthIsValid=passwordLengthIsValid($password);
echo"<br>";
var_dump( $passwordLengthIsValid);*/

echo'<br>';
$addsalt= addSalt($password);
//var_dump($addsalt);
 echo '<br>';
 $encod=encodePassword($addsalt);
//var_dump($encod);
echo"<br> votre nom est : ".$name."<br>   le saltetpassword est  : ".$addsalt."<br>  votre code crypte est .".$encod;
}
}


echo'<br>';
?>

<a href="./index.php">retour</a>
