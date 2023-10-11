<?php
/*function passwordLengthIsValid($password){
    $length=strlen($password);
    $response='';
    if($length<6){
        
        $response='votre mot de passe trop court !!!';
    }
    elseif($length>10){
        $response=' le mot de passe est trop long!!!';

    }
    
    return $response;
}
*/

function addSalt($passwordToSalt){
    
    $salt='ABC 1234@';
    $SaltedPassword=$salt.$passwordToSalt.$salt;
    return $SaltedPassword;

}

function encodePassword($SaltedPassword){
$encodPassword= sha1($SaltedPassword);
return $encodPassword;


}



?>