<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>travail des réclamations</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"><link rel="stylesheet" href="./style4.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="background-color:#d3ccb7ef">
<?php
try {
  $dns='mysql:host=localhost;dbname=gestion_reclamation';
  $user='root';
  $password='';
  $conn= new PDO($dns,$user,$password);
}

catch (Exception $e)
{
  echo "Connection à MySQL impossible :",$e->getMessage();
  die();
}
echo '<section class="login"><div class="head"><div class="form"><table class="table" style="background-color:#426dad;color:black;border:1px solid #f5f5f500;">
<tr style="background-color:#426dad;color:black center;"> <th> id client </th><th>id reclamation</th><th> date creation du reclamation </th><th>type de la reclamation </th><th> contrat</th><th> description du client </th></tr>';
  $res = $conn->query("SELECT * FROM reclamation ");
    while( $rec = $res->fetch(PDO::FETCH_OBJ) )
{ 
 echo ' <tr style="background-color:#426dad;color:black center;"><td>',$rec->idcli, '</td><td> ',$rec->id_rec, '</td><td>',$rec->date_crea_rec,'</td><td>',$rec->type_rec,'</td><td>',$rec->desc_cli,'</td></tr>';
}
echo '</table></div></div></section>';

echo "<br>";
?>
</body>
</html>