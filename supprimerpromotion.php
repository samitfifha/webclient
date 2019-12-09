<?php

include "ex3.php";
$lol=new promotion('','','','','');
$trash=$_POST['idtest'];
echo $trash;
session_start();
$trash2=$_POST['lol'];
echo $trash2;
if($trash2=="Modifier")
{
$_SESSION['tool']=$trash;
header("Location: modifierpromotion.php");
}
if($trash2=="Supprimez")
{
$lol->Supprimez($trash);
header("Location: affichezpromotion.php");
}






?>