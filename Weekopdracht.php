<?php
$host="localhost";
$databasename="inlogsysteem";
$username="root";
$password="";

//connectie naar database mysql
$conn= new mysqli($host, $username, $password, $databasename);



//haalt gebruikersnaam en wachtwoord van inlogpagina
$naam=$_POST['username'];
$wachtwoord=$_POST['password'];

print_r($naam);
print_r($wachtwoord);

//haalt uit database informatie
$selecteer= mysqli_query("select * from `gebruikers` where `gebruikersnaam` = '$naam' and `Wachtwoord` = '$wachtwoord' ")
            or die('het ging mis');

//kijkt of wachtwoord en gebruikersnaam kloppen
$controleer= mysqli_fetch_array($selecteer);
if($controleer['gebruikersnaam'] == $naam && $controleer['Wachtwoord']==$wachtwoord){
    echo "Welkom";
    
}else{
    echo "Mislukt";
}

?>


