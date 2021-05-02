<?php

session_start();

$_SESSION["panier"] = "list" ;


?>
<html>
<head>


</head>




<body>

<h2> Ajouter une personne </h2>

<form  method="get"  action="personne.php">

<label>Id </label>
<input type="text" name="id" id="id"  /> </br>

<label>Nom </label>
<input type="text" name="nom" id="nom"  /> </br>


<label>Age </label>
<input type="text" name="age" id="age"  /> </br>

<input type="submit"  value="" />
 
</form>

<h2> Modifier une personne par id </h2>

<form  method="get"  action="modifier.php">

<label>Id </label>
<input type="text" name="id" id="id"  /> </br>

<label>Nom </label>
<input type="text" name="nom" id="nom"  /> </br>


<label>Age </label>
<input type="text" name="age" id="age"  /> </br>

<input type="submit"  value="modifier par id" />
 
</form>

<h2> Supprimer une personne par id </h2>

<form  method="get"  action="supprimer.php">

<label>Id </label>
<input type="text" name="id" id="id"  /> </br>

<input type="submit"  value="supprimer" />
 
</form>


</html>