// Ga ik proberen!
<?php
session_start();
$_SESSION['massage']='';

$host="localhost";
$databasename="inlogsysteem";
$username="root";
$password="";

$conn= new mysqli($host, $username, $password, $databasename);


if (isset($_POST['name'])){
            $sql="INSERT INTO `gebruikers`(`Gebruikersnaam`, `email`, `Wachtwoord`) VALUES ('" . $_GET['name'] . "','" . $_GET['email'] . "','". $_GET['pass'] . "')";
        $conn->query($sql);
    
}
//
//
//if ($_SERVER['REQUEST_METHOD']== "POST"){
//    
//    if ($_POST['pass']==$_POST['pass2']){
//        
//        $sql="INSERT INTO `gebruikers`(`Gebruikersnaam`, `email`, `Wachtwoord`) VALUES ('" . $_GET['name'] . "','" . $_GET['email'] . "','". $_GET['pass'] . "')";
//        $conn->query($sql);
//       
//    }
//        
//}

?>
<html>
    <head>
        <title>registreren</title>
    </head>
    
    <body>
        <form action="WeekopdrachtInlog.php" method="post">
            <input type="tekst" placeholder="gebruikersnaam" name="name" required><br>
            <input type="email" placeholder="email" name="email" required><br>
            <input type="password" placeholder="wachtwoord" name="pass" required><br>
            <input type="password" placeholder="controleer wachtwoord" name="pass2" required><br>
            <input type="submit" value="klaar" name="klaar">

            
            
        </form>
        
    </body>
    
       
        
    
    
    
    
    
</html>
    