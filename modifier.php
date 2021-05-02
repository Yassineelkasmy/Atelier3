<?php

session_start();


$nom  = "";
$id = 0;

$age = 0;

// id
if(isset($_GET["id"]))
        $id = $_GET["id"] ;
 
// nom
if(isset($_GET["nom"]))
$nom = $_GET["nom"] ;



// age
if(isset($_GET["age"]))
$age = $_GET["age"] ;

try
{
$bdd = new PDO('mysql:host=localhost;dbname=lsi;charset=utf8', 'root', 'root'); 
echo "success" ;

$req = $bdd->prepare('UPDATE etudiant SET nom=:nom , age=:age WHERE id=:id');

$req->execute(array( 'nom' => $nom,'age' => $age , 'id'=> $id));


// cursor
$tab =    $bdd->query("select * from etudiant");

}
catch (Exception $e) {
die('Erreur : ' . $e->getMessage()); 


}



?>


<html>
<head>

 <title>  </title>

 </head>


 <body>

<table>
<th> id </th>
<th> nom </th>
<th> age </th>


<?php
 while ($donnees = $tab->fetch()){ // parcourir ligne par line
?>
<tr>  

<td><?php echo $donnees['id'] ; ?> </td> 
<td> <?php echo $donnees['nom'] ; ?> </td>
<td> <?php echo $donnees['age'] ; ?>  </td>
</tr>


<?php
}
?>
</table>

</body>
</html>


