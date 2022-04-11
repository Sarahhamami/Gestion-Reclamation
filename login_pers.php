<?php
$host="localhost";
$user="root";
$pw="";
$db="gestion_reclamation";
$conx=mysqli_connect($host,$user,$pw,$db);
if($conx==false){
echo "error connexion";
}else{ 
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST["login_pers"];
$password=$_POST["pwd_pers"];

$sql="SELECT * FROM personnel WHERE login_pers='".$username."' and pwd_pers='".$password."'";
$res=mysqli_query($conx,$sql);
$row=mysqli_fetch_array($res);

if(($row["type"]==0 )&&( $row["login_pers"]==$username) && ($row["pwd_pers"]==$password))
{
    header('location:travail.php');
}
else {
    echo" personnel non existant";
}}}
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
  <h1 class='msg'>login personnel</h1>
  </div>
  <div class='form'>
    <form method="POST" action="#">
  <input type="text" placeholder='login' class='text' id='login_pers' name="login_pers" required ><br><br>
  <input type="password" placeholder='••••••••••••••' class='password' name="pwd_pers"><br>
  <br>
  <br>
  
  <input type="submit" class='btn-login' id='do-login' name="login" value="login">   
    </form>
  </div>
</section>
<footer>
</footer>
</body>
</html>