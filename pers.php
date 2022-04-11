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

$username=$_POST["login_pers"];
$password=$_POST["pwd_pers"];

$sql="SELECT * FROM personnel WHERE login_pers='".$username."' and pwd_pers='".$password."'";
$res=mysqli_query($conx,$sql);
$row=mysqli_fetch_array($res);

if($row["type"]==0 && $row["login_pers"]==$username && $row["pwd_pers"]==$password)
{
    header('location:travail.php');
}
else {
    echo(" <link rel='stylesheet' href='./style3.css'><div class='delay'>personnel non existant</div>");
}
}
?>