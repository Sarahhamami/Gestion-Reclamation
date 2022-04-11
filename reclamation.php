
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
    if(isset($_POST['id_cli'])&& isset($_POST['id_rec']) && isset($_POST['date_crea_rec']) && isset($_POST['type_rec']) && isset($_POST['desc_cli']) ){
        $idcli = $_POST['id_cli'];
   
        $id_rec=$_POST['id_rec'];
    

        $date_crea_rec=$_POST['date_crea_rec'];
    
        $type_rec=$_POST['type_rec'];
    
     
        $desc_cli=$_POST['desc_cli'];

     
    
    $sql="insert into reclamation ( id_rec, date_crea_rec, type_rec,  desc_cli,idcli) VALUES ('$id_rec', '$date_crea_rec', '$type_rec', '$desc_cli', '$idcli') ";
    mysqli_query($conx,$sql);
    echo 'reclamation faite';
}}

 ?>
 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
      <title>réclamation</title>
      
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
      <link rel="stylesheet" href="style4.css">
</head>
<body>
<section class='login' id='login'>
  <div class='head'>
  </div>
  <div class='form'>
    <form method="POST" action="#">
  <input type="text" placeholder='id client' class='text' id='id_cli' name="id_cli" required ><br><br>
  
  <input type="text" placeholder='id reclamation' class='text' id='id_rec' name="id_rec" required ><br><br>
  <div class="text">date réclamation  </div>
  <input type="date" class='text' id='date_crea_rec' name="date_crea_rec" required ><br><br>

  <input type="text" placeholder='type reclamation' class='text' id='type_rec' name="type_rec" required ><br><br>

  <input type="text" placeholder='description client' class='text' id='desc_cli' name="desc_cli"  ><br><br>
  <input type="submit" class='btn-login' id='do-login' name="reclamer" value="reclamer">
    </form>
  </div>
</section>
<footer>
</footer>

</body>
</html>
