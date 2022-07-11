<?php

$name="";
$to="tognange@gmail.com";

$msg= "Thanks for new Registration.";   

$subject="Vérification Email";

$headers .= "MIME-Version: 1.0"."\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

$headers .= 'From:ColiCash | Inscription <tognonkoffi0@gmail.com>'."\r\n";
$activationcode=rand(10000,20000);
        

$ms.="<html></body><div><div>Cher $name,</div></br></br>";

$ms.="<div style='padding-top:8px;'>Votre Code de Vérification est le suivant : $activationcode .</div>

<div style='padding-top:20px;'>Saisissez le code sur colicash.com afin de valider votre Inscription.</div>

<div style='padding-top:80px;'>Powered by colicash.com .</div>

</body></html>";

mail($to,$subject,$ms,$headers);

echo "<script>alert('Registration successful, please verify in the registered Email-Id');</script>";

 ?>

