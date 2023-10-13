<?php
$pass="Reham1234567Afifi";
$hash=password_hash($pass,PASSWORD_DEFAULT);
echo $hash;
echo "<br>".strlen($hash);
$verify=password_verify($pass,$hash);
echo "<br>";
if($verify){
    echo "correct password";

}
else{
    echo "incorrect password";
}


?>