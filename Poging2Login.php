
<html>
<head>
<title></title>
</head>
<body>
<div>

<?php
$h="localhost";
$db="website";
$un="root";
$pw="";

$username = $_POST['username'];
$password = sha1($_POST['password']);

if($username && $password)
{
    $connect = new mysqli($h, $un, $pw, $db) or die ('Couldn\'t Connect');
   
    $sql= "SELECT `id`, `username`, `password`, `nickname`, `date`, `email` FROM `users` WHERE `username`= $username AND `password`=$password";
//    $query = sprintf("SELECT `id`, `username`, `password`, `nickname`, `date`, `email` FROM `users` WHERE `username`= $username AND `password`=$password",
//    
//            
//    mysql_real_escape_string($username),
//    mysql_real_escape_string($password));
    
    $connect->query($sql);
    
    
    $selecteer= mysqli_query($connect, $sql)
        or die ("database niet bereikbaar".mysqli_error());
        


//kijkt of wachtwoord en gebruikersnaam kloppen

$controleer= mysqli_fetch_array($selecteer);

if($controleer['username'] == $username && $controleer['password'] == $password){
    echo "Welkom";
    
}else{
    echo "Mislukt";
}
    
    
//    $rows = mysql_query($sql);
//
//    $numrows = mysql_num_rows($rows); 
//
//    if($numrows)
//    {
//        while($row = mysql_fetch_assoc($rows))
//        {
//            $dbusername = $row['username'];
//            $dbpassword = $row['password'];
//            $dbnickname = $row['nickname'];
//            $dbdate = $row['date'];
//            $dbemail = $row['email'];
//        }
//        
//            echo("<p>Welcome back $dbusername !</p> <p>as nickname: $dbnickname</p><p>Account Registered at: $dbdate</p>");
//            echo("<p>Your Email address: $dbemail</p>");
//            echo("<a href='logout.php'>Logout</a>");
//            
//        $_SESSION['username']=$dbusername;
//    }
//    else
//        die("Username or Password is wrong!");
//}
?>
</div>
</body>
</html>