<?php
$host="localhost";
$databasename="inlogsysteem";
$username="root";
$password="";

$conn= new mysqli($host, $username, $password, $databasename);

$naam=$_POST['username'];
$wachtwoord=$_POST['password'];



$sql="select * from `gebruikers` where `gebruikersnaam` = '$naam' and `Wachtwoord` = '$wachtwoord' ";
$result = $conn->query($sql);


$selecteer= mysqli_query($conn, $sql)
        or die ("database niet bereikbaar".mysqli_error());
   
$num = mysqli_num_rows($result);

if ($num == 1){

    echo 'welkom';
}else{
       
        echo 'verkeerde wachtwoord';
    }
    
    

//kijkt of wachtwoord en gebruikersnaam kloppen
//
//$controleer= mysqli_fetch_array($selecteer);
//
//if($controleer['gebruikersnaam'] == $naam && $controleer['Wachtwoord'] == $wachtwoord){
//    echo "Welkom";
//    
//}else{
//    echo "Mislukt";
//}

?>


