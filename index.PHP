<?php
 
$host="localhost";
$user="root";
$pw="";
$db="gestion_reclamation";
$conx=mysqli_connect($host,$user,$pw,$db);
if($conx==false){
echo "error connexion";
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
$username=$_POST["login_cli"];
$password=$_POST["pwd_cli"];
$sql="select * from client where login_cli='".$username."' and pwd_cli='".$password."'";
$res=mysqli_query($conx,$sql);
$row=mysqli_fetch_array($res);

if($row["type"]==0 && $row["login_cli"]==$username && $row["pwd_cli"]==$password)
{
    header('location:reclamation.php');
}
else {
    echo(" <link rel='stylesheet' href='./style3.css'><div class='delay'>client non existant</div>");
}

}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Login</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"><link rel="stylesheet" href="./style4.css">

</head>
<body>
<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'>Arab soft</h1>
  </div>
  <p class='msg'>Bienvenue</p>
  <div class='form' >
    <form method="POST" action="#">
  <input type="text" placeholder='Login' class='text' id='username' name="login_cli" required ><br>
  <input type="password" placeholder='••••••••••••••' class='password' name='pwd_cli'><br>
  <input type="submit" class='btn-login' id='do-login' name="ajouter" value="se connecter"> &nbsp;&nbsp;
  <a href="sign_in.php" class='forgot'> Pas de compte?</a><br>
  
    </form>
    
  </div>
</section>
<div class="head">
  
<a href="login_pers.php" class="forgot"> Vous êtes un personnel?  <a><br>
</div>
<footer>

<p>  
 by Sarah(<a href='https://github.com/Sarahhamami'>@Sarahhamami</a>)</p><br>
<div class="image"><img src="logo.png"><br></div>
</footer>

</body>
</html>
