<?php


    $host='localhost';
    $user='root';
    $pw='';
    $db="gestion_reclamation";
    $conx= mysqli_connect ($host, $user,$pw,$db);
if ($conx==false){
    echo "error connextion";
}
else {

if (isset($_POST['inscri'])){
  if(isset($_POST['id_cli'])&& isset($_POST['mat_fisc']) && isset($_POST['nom_cli']) && isset($_POST['login_cli']) 
  && isset($_POST['nom_rep']) && isset($_POST['prenom_rep']) && isset($_POST['pwd_cli']) ){
        $idcli = $_POST['id_cli'];
   
        $mat_fisc=$_POST['mat_fisc'];
    

        $nom_cli=$_POST['nom_cli'];
    
        $login_cli=$_POST['login_cli'];
    
     
        $nom_rep=$_POST['nom_rep'];

        $prenom_rep=$_POST['prenom_rep'];
    
        $pwd_cli=$_POST['pwd_cli'];
        $sql="INSERT INTO `client` (`idcli`, `mat_fisc`, `nom_cli`, `login_cli`, `pwd_cli`, `nom_rep`, `prenom_rep`) VALUES
         ('$idcli', '$mat_fisc', '$nom_cli', '$login_cli', '$pwd_cli', '$nom_rep', '$prenom_rep');";
         mysqli_query($conx,$sql);
    echo 'client ajouté';
}
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
  <h1 class='msg'>S’inscrire</h1>
  </div>
  <div class='form' >
    <form method="POST" action="sign_in.php">
  <input type="text" placeholder='id client' class='text' id='id_cli' name="id_cli" required ><br><br>
  
  <input type="text" placeholder='matricule fiscale' class='text' id='mat_fisc' name="mat_fisc" required ><br><br>
  
  <input type="text" placeholder='nom client' class='text' id='nom_cli' name="nom_cli" required ><br><br>
  
  <input type="text" placeholder='login client' class='text' id='login_cli' name="login_cli" required ><br><br>
  
  <input type="text" placeholder='nom represantant' class='text' id='nom_rep' name="nom_rep" required ><br><br>
  <input type="text" placeholder='prénom represantant' class='text' id='prenom_rep' name="prenom_rep" required ><br>
  <input type="password" placeholder='••••••••••••••' class='password' name='pwd_cli'><br>
  <br>
  <br>
  
  <input type="submit" class='btn-login' id='do-login' name="inscri" value="s'inscrire">   &nbsp;&nbsp;
  <a href="index.php" class='forgot' >Se connecter</a>
    </form>
  </div>
</section>
<footer>
</footer>
</body>
</html>



