<?php

session_start();

$id = 0;

if(isset($_GET["id"]))
        $id = $_GET["id"] ;

try
{
$bdd = new PDO('mysql:host=localhost;dbname=lsi;charset=utf8', 'root', 'root'); 
echo "success" ;        


$req = $bdd->prepare('DELETE FROM etudiant WHERE id=:id');

$req->execute(array('id'=> $id));


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


